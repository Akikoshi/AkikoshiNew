<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 17.10.2016
 * Time: 11:27
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


use Class152\PizzaMamamia\AbstractClasses\Services\ProductListService\Library\ProductListEntity;
use Class152\PizzaMamamia\Database\MySql;
use Class152\PizzaMamamia\Services\ProductListService\Filter\ProductListFilter;


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
            $this->orderBy .= "order by pd.name;\";";
        }
        else
        {
            $this->orderBy = "AND pd.productGroup =".$productGroupId;
        }

        if( $productListFilter->isSortByPrice() === false )
        {
            $this->orderBy .= "order by pd.name;\";";
        }
        else
        {
            $this->orderBy .= "order by pd.price;\";";
        }


    }
    
    public function getProductListItems() : \Generator
    {
        $sql = "select pd.id, pd.mediaFileId, pd.name, ds.shortDescription, pd.type, pd.grossPrice, pd.vat, pd.productGroup "
            . "from Products as pd join Descriptions as ds on pd.id = ds.fk_products "
            . "where (pd.`type` like '%ontain%' OR pd.`type` like '%ingl%') "
            . $this->orderBy;

        $result = $this->db->query($sql);
        $x = $result->fetch_assoc();
       foreach($x as $item)
        {
            yield new ProductListEntity(
                $item['id'],
                $item['mediaFileId'],
                $item['name'],
                $item['shortDescription'],
                $item['type'],
                $item['grossPrice'],
                $item['vat'],
                $item['productGroup']
            );
        }
    }

    public function getProductVariantArray(int $parentId) : \Generator
    {
        //Todo: Sql question change
        $sql = "select pd.id, pd.mediaFileId, pd.name, ds.shortDescription, pd.type, pd.grossPrice, pd.vat, pd.productGroup Descriptions
        from Products as pd join Descriptions as ds on pd.id = ds.fk_products
        where pd.parentId = ".$parentId."
        order by pd.price;";

        $result = $this->db->query($sql);
        $return = $result->fetch_all();

        foreach( array_keys($return) as $item )
        {
            yield new ProductListEntity(
                $item['id'],
                $item['mediaFileId'],
                $item['name'],
                $item['shortDescription'],
                $item['type'],
                $item['grossPrice'],
                $item['vat'],
                $item['productGroup']
            );
        }
    }

//    private function askForProductList( string $sql )
//    {
//        /** @var \MySqli_Result $result */
//        $result = $this->db->query($sql);
//
//        if( $line = $result->fetch_assoc() )
//        {
//            return new ProductListEntity(
//                $line['id'],
//                $line['mediaFileId'],
//                $line['productName'],
//                $line['shortDescription'],
//                $line['typeOfProduct'],
//                $line['grossPrice'],
//                $line['vat'],
//                $line['productGroupId']
//            );
//        }
//        return null;
//    }

}