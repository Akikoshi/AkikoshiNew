<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 24.10.2016
 * Time: 09:13
 */

namespace Class152\PizzaMamamia\Services\ShoppingCartService\Repository;


use Class152\PizzaMamamia\Database\MySql;
use Class152\PizzaMamamia\Services\ShoppingCartService\Repository\Entities\ShoppingCartEntity;


class ShoppingCartRepository 
{
    /** @var Mysql */
    private $db;

    public function __construct()
    {
        $db = new MySql();
        $this->db = $db->getInstance();
    }
    
    public function getItems()
    {
        $items = [
            new ShoppingCartEntity()
        ];
    }

    
    public function  getProductById( int $productId ) : ShoppingCartEntity
    {
        $sql = "SELECT  name,parentId,productGroup,GrossPrice,type FROM Products WHERE id = "
            . $productId . ";";
        $result = $this->db->query( $sql );
        $product = $result->fetch_assoc();
        
        return new  ShoppingCartEntity( $product);
    }
    
    /**
     * TODO: Noch nicht fertig / not logged in Exception wird gebraucht ?? Kunde kann auch shoppincart anzeigen ohne login
     */
}