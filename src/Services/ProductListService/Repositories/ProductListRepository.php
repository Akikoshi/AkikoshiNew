<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 17.10.2016
 * Time: 11:27
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Repositories;



use Class152\PizzaMamamia\Database\MySql;
use Class152\PizzaMamamia\Services\ProductListService\Exceptions\PaginatorResultIsEmptyException;
use Class152\PizzaMamamia\Services\ProductListService\Filter\ProductListFilter;
use Class152\PizzaMamamia\Services\ProductListService\Repositories\Entities\ProductListEntity;
use Class152\PizzaMamamia\Services\ProductListService\values\Link;


class ProductListRepository
{
    /** @var  \MySqli */
    private $db;

    /** @var  string */
    private $orderBy;

    /** @var  string */
    private $groupId = '';

    /** @var  array */
    private $paginationArray;


    /**
     * ProductListRepository constructor.
     * @param ProductListFilter $productListFilter
     */
    public function __construct(ProductListFilter $productListFilter)
    {
        $db = new MySql();
        $this->db = $db->getInstance();
        $this->checkFilterOptions($productListFilter);
    }

    /**
     * @param ProductListFilter $productListFilter
     */
    private function checkFilterOptions(ProductListFilter $productListFilter)
    {
        /** @var
         * $productGroupId
         */
        $productGroupId = $productListFilter->getGroupId();

        if($productListFilter->isFilteredByGroupId() !== false)
        {
            $this->groupId = " AND p.productGroup = " . $productListFilter->getGroupId();
        }

        if($productListFilter->isFilteredByGroupId() === false )
        {
            $this->orderBy = " order by p.name";
        }
        else
        {
            $this->orderBy = " AND p.productGroup = " . $productGroupId;
        }

        if( $productListFilter->isSortByPrice() === false )
        {
            $this->orderBy = " order by p.name";
        }
        else
        {
            $this->orderBy = " order by p.grossPrice";
        }
    }

    /**
     * @param ProductListFilter $productListFilter
     * @return ProductListFilter
     * @throws PaginatorResultIsEmptyException
     */
    public function getItemsAmount(ProductListFilter $productListFilter)
    {
        $sql = "SELECT 
                COUNT(*) AS items"
            . " FROM Products as p LEFT JOIN Descriptions as d 
                ON p.id = d.fk_products RIGHT JOIN MediaFiles as mf 
                ON p.mediaFileId = mf.id"
            . " WHERE (p.type = \"Container\" OR p.type = \"Single\")"
            . $this->groupId
            . $this->orderBy . ";";

        $result = $this->db->query($sql);
        if (null !== ($item = $result->fetch_assoc())) {
            $productListFilter->setItemAmount((INT)$item['items']);
            //calls the createPaginator function
            $this->createPaginator($productListFilter);
        } else {
            throw new PaginatorResultIsEmptyException();
        }
        return $productListFilter;
    }

    /**
     * @param ProductListFilter $productListFilter
     * @return array
     */
    private function createPaginator(ProductListFilter $productListFilter)
    {
        $pageAmount = 0;
        $paginationArray = [];
        $pageAmount = ceil($productListFilter->getItemsAmount() / $productListFilter->getItemsPerPage());

        if ($pageAmount == 0) {
            $pageAmount = 1;
        }

        for ($i = 0; $i < $pageAmount; $i++) {
            $paginationArray[$i] = new Link(
                "/productlist/index/"
                . $productListFilter->getGroupId()
                . "/" . ($i + 1) //Todo: hier muss noch auf und absteigend implementiert werden, ist zur zeit nicht im Link selbst enthalten
                , "Pagination"
            );
        }
        $this->paginationArray = $paginationArray;
    }

    public function getPaginationArray()
    {
        return $this->paginationArray;
    }


    /**
     * @param int $currentPage
     * @param int $itemsPerPage
     * @return \Generator
     */
    public function getProductListItems(int $currentPage, int $itemsPerPage) : \Generator
    {
        $limitSql = '';
        $actualItem = 0;

        for ($i = 0; $i < $currentPage; $i++) {
            $limitSql = " limit " . $actualItem . "," . $itemsPerPage . ";";
            $actualItem += $currentPage;
        }


        $sql = "select 
                p.id as id,  
                p.name as name, 
                d.shortDescription as shortDescription, 
                p.type as type, 
                p.grossPrice as grossPrice, 
                p.vat as vat, 
                p.productGroup as productGroup, 
                p.parentId as parentId,
                mf.id as mediaFileId,
				mf.mime as mime,
				mf.height as height,
				mf.width as width,
				mf.thumbHeight as thumbHeight,
				mf.thumbWidth as thumbWidth, 
				mf.bigHeight as bigHeight, 
				mf.bigWidth as bigWidth, 
				mf.url as url, 
				mf.thumbUrl as thumbUrl, 
				mf.bigUrl as bigUrl, 
				mf.titleTag as titleTag, 
				mf.altTag as altTag"
            . " FROM Products as p LEFT JOIN Descriptions as d 
                ON p.id = d.fk_products RIGHT JOIN MediaFiles as mf 
                ON p.mediaFileId = mf.id"
            . " WHERE (p.type = \"Container\" OR p.type = \"Single\")"
            . $this->groupId
            . $this->orderBy
            . $limitSql;


        $result = $this->db->query($sql);

        while( null !== ( $item = $result->fetch_assoc() ) )
        {
            yield new ProductListEntity(
                $item['id'],
                $item['name'],
                $item['shortDescription'],
                $item['type'],
                $item['grossPrice'],
                $item['vat'],
                $item['productGroup'],
                $item['parentId'],
                $item['mediaFileId'],
                $item['mime'],
                $item['height'],
                $item['width'],
                $item['thumbHeight'],
                $item['thumbWidth'],
                $item['bigHeight'],
                $item['bigWidth'],
                $item['url'],
                $item['thumbUrl'],
                $item['bigUrl'],
                $item['titleTag'],
                $item['altTag']
            );
        }
    }

    /**
     * @param int $parentId
     * @return \Generator
     */
    public function getProductVariantArray(int $parentId) : \Generator
    {

        $sql = "select 
                p.id as id, 
                p.mediaFileId as mediaFileId, 
                p.name as name, 
                d.shortDescription as shortDescription, 
                p.type as type, 
                p.grossPrice as grossPrice, 
                p.vat as vat, 
                p.productGroup as productGroup, 
                p.parentId as parentId,
                mf.id as mediaFileId,
				mf.mime as mime,
				mf.height as height,
				mf.width as width,
				mf.thumbHeight as thumbHeight,
				mf.thumbWidth as thumbWidth, 
				mf.bigHeight as bigHeight, 
				mf.bigWidth as bigWidth, 
				mf.url as url, 
				mf.thumbUrl as thumbUrl, 
				mf.bigUrl as bigUrl, 
				mf.titleTag as titleTag, 
				mf.altTag as altTag"
            . " FROM Products as p LEFT JOIN Descriptions as d 
                ON p.id = d.fk_products RIGHT JOIN MediaFiles as mf 
                ON p.mediaFileId = mf.id"
            . " where p.parentId = ".$parentId
            . " order by p.grossPrice;";

        $result = $this->db->query($sql);

        while( null !== ( $item = $result->fetch_assoc() ) )
        {
            yield new ProductListEntity(
                $item['id'],
                $item['name'],
                $item['shortDescription'],
                $item['type'],
                $item['grossPrice'],
                $item['vat'],
                $item['productGroup'],
                $item['parentId'],
                $item['mediaFileId'],
                $item['mime'],
                $item['height'],
                $item['width'],
                $item['thumbHeight'],
                $item['thumbWidth'],
                $item['bigHeight'],
                $item['bigWidth'],
                $item['url'],
                $item['thumbUrl'],
                $item['bigUrl'],
                $item['titleTag'],
                $item['altTag']
            );
        }
    }

}