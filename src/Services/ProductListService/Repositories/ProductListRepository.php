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


        if($productListFilter->isFilterByGroupId() === false )
        {
            $this->orderBy = " order by p.name;"; // Todo: Feheler bei .= syntax in der Mysqlabfrage
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
            $this->orderBy = " order by p.price;";
        }


    }
    
    public function getProductListItems() : \Generator
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
                p.parentId as parentId"
            . " FROM Products as p LEFT JOIN Descriptions as d ON p.id = d.fk_products"
            . " WHERE p.type = \"Container\" OR p.type = \"Single\""
            . $this->orderBy;

        $result = $this->db->query($sql);

        while( null !== ( $item = $result->fetch_assoc() ) )
        {
            yield new ProductListEntity(
                $item['id'],
                $item['mediaFileId'],
                $item['name'],
                $item['shortDescription'],
                $item['type'],
                $item['grossPrice'],
                $item['vat'],
                $item['productGroup'],
                $item['parentId']
            );
        }
    }

    public function getProductVariantArray(int $parentId) : \Generator //Todo: umbenennen
    {
        //Todo: Sql question change
        $sql = "select 
                p.id as id, 
                p.mediaFileId as mediaFileId, 
                p.name as name, 
                d.shortDescription as shortDescription, 
                p.type as type, 
                p.grossPrice as grossPrice, 
                p.vat as vat, 
                p.productGroup as productGroup, 
                p.parentId as parentId"
            . " FROM Products as p LEFT JOIN Descriptions as d ON p.id = d.fk_products"
            . " where p.parentId = ".$parentId
            . " order by p.grossPrice;";

        $result = $this->db->query($sql);

        while( null !== ( $item = $result->fetch_assoc() ) )
        {
            yield new ProductListEntity(
                $item['id'],
                $item['mediaFileId'],
                $item['name'],
                $item['shortDescription'],
                $item['type'],
                $item['grossPrice'],
                $item['vat'],
                $item['productGroup'],
                $item['parentId']
            );
        }
    }

}