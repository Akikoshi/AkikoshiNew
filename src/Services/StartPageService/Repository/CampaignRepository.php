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
        $sql = "select c.id,c.position,c.name,c.description,c.hasBanner,c.banner,c.isActive,c.hasDayTimeRule,c.reduceType,c.reduceValue,c.startDate,c.endDate,c.dayTimeStart,c.dayTimeEnd,c.url
                from Campaigns c
                where (c.startDate <= date(now()) and c.endDate >= date(now()))
                or c.startDate <= (date(now()) + INTERVAL 14 DAY);";
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
            $line['id'],
            $line['name'],
            $line['description'],
            $line['hasBanner'],
            $line['banner'],
            $line['isActive'],
            $line['hasDayTimeRule'],
            $line['reduceType'],
            $line['reduceValue'],
            $line['startDate'],
            $line['endDate'],
            $line['dayTimeStart'],
            $line['dayTimeEnd'],
            $line['url']
        );
    }
}