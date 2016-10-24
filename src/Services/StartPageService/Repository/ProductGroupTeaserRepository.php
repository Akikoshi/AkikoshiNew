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
use Class152\PizzaMamamia\Services\StartPageService\Repository\Interfaces\ProductGroupTeaserInterface;

class ProductGroupTeaserRepository implements ProductGroupTeaserInterface
{
    /** @var \mysqli */
    private $db;

    /**
     * ProductGroupTeaserRepository constructor.
     */
    public function __construct()
    {
        $db = new MySql();
        $this->db = $db->getInstance();
    }

    /**
     * @return array
     */
    public function getProductGroupTeaserItems() : array
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

    /**
     * @param $line
     * @return ProductGroupTeaserEntity
     */
    public function askForSingleProductGroupTeaserItem( $line ) : ProductGroupTeaserEntity
    {
        return new ProductGroupTeaserEntity(
            $line['content'],
            $line['headline'],
            $line['linkText'],
            $line['pictureUrl']
        );
    }
}