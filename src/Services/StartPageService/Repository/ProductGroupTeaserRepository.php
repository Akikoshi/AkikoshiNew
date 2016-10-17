<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 26.09.2016
 * Time: 14:27
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Repository;


use Class152\PizzaMamamia\Database\MySql;
use Class152\PizzaMamamia\Services\StartPageService\Repository\Entities\ProductGroupTeaserEntity;

class ProductGroupTeaserRepository
{
    private $db;

    public function __construct()
    {
        $db = new MySql();
        $this->db = $db->getInstance();
    }

    public function getProductGroupTeaserItems()
    {
        $sql = "select * from ProductGroupTeaser p where p.active = 'Y' order by p.position asc;";
        $result = $this->db->query( $sql );
        $allItems = $result->fetch_all(MYSQLI_ASSOC);
        foreach( array_keys( $allItems ) as $key )
        {
            $allItems[$key] = $this->askForSingleProductGroupTeaserItem( $allItems[$key] );
        }
        return $allItems;
    }

    private function askForSingleProductGroupTeaserItem( $line )
    {
        return new ProductGroupTeaserEntity(
            $line['content'],
            $line['headline'],
            $line['linkText'],
            $line['pictureUrl']
        );
    }
}