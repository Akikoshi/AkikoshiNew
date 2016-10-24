<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 13:58
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Repository;


use Class152\PizzaMamamia\Database\MySql;
use Class152\PizzaMamamia\Services\CampaignService\Repository\Entities\CampaignEntity;
use Class152\PizzaMamamia\Services\CampaignService\Repository\Interfaces\CampaignInterface;

class CampaignRepository implements CampaignInterface
{
    private $db;

    public function __construct()
    {
        $db = new MySql();
        $this->db = $db->getInstance();
    }

    /**
     * @return array
     */
    public function getCampaignItems() : array
    {
        $sql = "select * from Campaign c where c.active = 'Y';";
        $result = $this->db->query( $sql );
        $allItems = $result->fetch_all(MYSQLI_ASSOC);
        foreach( array_keys( $allItems ) as $key )
        {
            $allItems[$key] = $this->askForSingleCampaignItem( $allItems[$key] );
        }
        return $allItems;
    }

    /**
     * @param $line
     * @return CampaignEntity
     */
    public function askForSingleCampaignItem( $line ) : CampaignEntity
    {
        return new CampaignEntity(
            $line['src'],
            $line['pictureUrl'],
            $line['headline'],
            $line['content'],
            $line['linkText'],
            $line['id']
        );
    }
}