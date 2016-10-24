<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 15:32
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Repository;


use Class152\PizzaMamamia\Database\MySql;
use Class152\PizzaMamamia\Services\CampaignService\Repository\Entities\CampaignDetailEntity;
use Class152\PizzaMamamia\Services\CampaignService\Repository\Interfaces\CampaignDetailInterface;

class CampaignDetailRepository implements  CampaignDetailInterface
{
    private $db;

    public function __construct()
    {
        $db = new MySql();
        $this->db = $db->getInstance();
    }

    /**
     * @param int $campaignId
     * @return array
     */
    public function getCampaignDetailItems( int $campaignId ) :array 
    {
        $sql = "select * from Campaign where " . $campaignId . " = position;";
        $result = $this->db->query( $sql );
        $allItems = $result->fetch_all(MYSQLI_ASSOC);
        foreach( array_keys( $allItems ) as $key )
        {
            $allItems[$key] = $this->askForSingleCampaignDetailItem( $allItems[$key] );
        }
        return $allItems;
    }

    /**
     * @param $line
     * @return CampaignDetailEntity
     */
    public function askForSingleCampaignDetailItem( $line ) : CampaignDetailEntity
    {
        return new CampaignDetailEntity(
            $line['src'],
            $line['pictureUrl'],
            $line['headline'],
            $line['content'],
            $line['linkText'],
            $line['position']
        );
    }
}