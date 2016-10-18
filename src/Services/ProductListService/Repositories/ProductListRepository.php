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
use Class152\PizzaMamamia\Interfaces\ProductListRepositroryInterface;


class ProductListRepository implements ProductListRepositroryInterface
{
    /** @var  \MySqli */
    private $db;   
    
    
    public function __construct()
    {
        $db = new MySql();
        $this->db = $db->getInstance();
    }
    
    public function getContainerAndSingleProducts() :array
    {
        $sql = "select pd.id, pd.mediaFileId, pd.name, ds.shortDescription, pd.type, pd.grossPrice, pd.vat, pd.productGroup Descriptions
        from Products as pd join Descriptions as ds on pd.id = ds.fk_products
        where pd.`type` like '%ontain%' || pd.`type` like '%ingl%'
        order by pd.type;";

        $result = $this->db->query($sql);
        $return = $result->fetch_all();

        foreach( array_keys($return) as $key )
        {
            $return[$key] = new ProductListEntity(
                $return[$key][0],
                $return[$key][1],
                $return[$key][3],
                $return[$key][4],
                $return[$key][5],
                $return[$key][6],
                $return[$key][7],
                $return[$key][8]
            );
        }
        return $return;
    }

    public function getChildProducts(int $parentId) :array
    {
        $sql = "select pd.id, pd.mediaFileId, pd.name, ds.shortDescription, pd.type, pd.grossPrice, pd.vat, pd.productGroup Descriptions
        from Products as pd join Descriptions as ds on pd.id = ds.fk_products
        where pd.parentId = ".$parentId."
        order by pd.type;";

        $result = $this->db->query($sql);
        $return = $result->fetch_all();

        foreach( array_keys($return) as $key )
        {
            $return[$key] = new ProductListEntity(
                $return[$key][0],
                $return[$key][1],
                $return[$key][3],
                $return[$key][4],
                $return[$key][5],
                $return[$key][6],
                $return[$key][7],
                $return[$key][8]
            );
        }
        return $return;
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