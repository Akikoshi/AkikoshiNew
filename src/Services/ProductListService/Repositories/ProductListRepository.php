<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 17.10.2016
 * Time: 11:27
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


use Class152\PizzaMamamia\Database\MySql;
use Class152\PizzaMamamia\Interfaces\ProductListRepositroryInterface;

class ProductListRepository implements ProductListRepositroryInterface
{
    private $db;   
        
    /** @var  array */
    private $queryArray;
    
 
    //------------------------------------------------------------------------------------------------------------------
    
    public function getContainerAndSingleProducts() :array
    {
        $this->queryArray = "select pd.id, pd.mediaFileId, pd.name, ds.shortDescription, pd.type, pd.grossPrice, pd.vat, pd.productGroup Descriptions
        from Products as pd join Descriptions as ds on pd.id = ds.fk_products
        where pd.`type` like '%ontain%' || pd.`type` like '%ingl%'
        order by pd.type;";
    }

    public function getChildProducts() :array
    {
        // TODO: Implement getChildProducts() method.
    }


}