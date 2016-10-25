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
    
    public function __construct()
    {
        $this->databaseQuery();
        $this->setDetailsUrl();
          
        $db = New MySql();
        $this->db = $db->getInstance();    
    }

    private function databaseQuery()
    {
         $sql = "select pd.id, pd.mediaFileId, pd.name, ds.shortDescription, pd.type, pd.grossPrice, pd.vat, pd.productGroup Descriptions
        from Products as pd join Descriptions as ds on pd.id = ds.fk_products
        where pd.`type` like '%ontain%' || pd.`type` like '%ingl%'
        order by pd.type;";
        $result = $this->db->query( $sql );
        $queryArray = $result->fetch_all(MYSQLI_ASSOC);

        foreach( array_keys( $queryArray ) as $key )
        {
            $queryArray[$key] = $this->varsFiller( $queryArray[$key] );
        }
            
        return $queryArray;
    }

     private function varsFiller()
     {
         
     }




}