<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 26.09.2016
 * Time: 13:33
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Repository;


use Class152\PizzaMamamia\Database\MySql;
use Class152\PizzaMamamia\Services\StartPageService\Repository\Entities\CampaignEntity;

class CampaignRepository
{
    private $db;

    public function __construct()
    {
        $db = new MySql();
        $this->db = $db->getInstance();
    }

    /**
     * @return CampaignEntity
     */
    public function getCampaignItems()
    {
        $sql = "select * from Campaign c where c.active = 'Y' order by c.position asc limit 3;";
        $result = $this->db->query( $sql );
        $allItems = $result->fetch_all(MYSQLI_ASSOC);
        foreach( array_keys( $allItems ) as $key )
        {
            $allItems[$key] = $this->askForSingleCampaignItem( $allItems[$key] );
        }
        return $allItems;
    }

    /**
     * @param array $line
     * @return CampaignEntity
     */
    private function askForSingleCampaignItem( $line )
    {
        return new CampaignEntity(
            $line['src'],
            $line['pictureUrl'],
            $line['headline'],
            $line['content'],
            $line['linkText'],
            $line['price'],
            $line['position']
        );
    }
}