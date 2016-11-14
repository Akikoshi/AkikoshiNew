<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 17.10.2016
 * Time: 11:27
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Repositories;



use Class152\PizzaMamamia\Database\MySql;
use Class152\PizzaMamamia\Services\ProductListService\Filter\ProductListFilter;
use Class152\PizzaMamamia\Services\ProductListService\Repositories\Entities\ProductListEntity;


class ProductListRepository
{
    /** @var  \MySqli */
    private $db;

    /** @var  string */
    private $orderBy;

    /** @var  string */
    private $groupId = '';
    
    public function __construct(ProductListFilter $productListFilter)
    {
        $db = new MySql();
        $this->db = $db->getInstance();
        $this->checkFilterOptions($productListFilter);
    }

    private function checkFilterOptions(ProductListFilter $productListFilter)
    {
        /** @var
         * $productGroupId
         */
        $productGroupId = $productListFilter->getGroupId();

        if($productListFilter->isFilteredByGroupId() !== false)
        {
            $this->groupId = "AND p.productGroup = ".$productListFilter->getGroupId();
        }

        if($productListFilter->isFilteredByGroupId() === false )
        {
            $this->orderBy = " order by p.name;"; 
        }
        else
        {
            $this->orderBy = " AND p.productGroup = ".$productGroupId.";";
        }

        if( $productListFilter->isSortByPrice() === false )
        {
            $this->orderBy = " order by p.name;";
        }
        else
        {
            $this->orderBy = " order by p.grossPrice;";
        }


    }
    
    public function getProductListItems() : \Generator
    {
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
            . $this->orderBy;

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