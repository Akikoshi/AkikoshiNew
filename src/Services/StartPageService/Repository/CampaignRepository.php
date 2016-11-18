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
use Class152\PizzaMamamia\Services\StartPageService\Repository\Interfaces\CampaigneInterface;

class CampaignRepository implements CampaigneInterface
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
        $sql = "SELECT * FROM Campaigns c WHERE c.active = 'Y' ORDER BY c.position ASC LIMIT 3;";
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
            $line['price'],
            $line['position']
        );
    }
}