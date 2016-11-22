<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 24.10.2016
 * Time: 10:56
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Repositories;


use Class152\PizzaMamamia\Database\MySql;
use Class152\PizzaMamamia\Services\CampaignService\Repositories\Entities\CampaignEntity;

class CampaignRepository
{
    /**
     * @var \mysqli
     */
    private $db;

    /**
     * CampaignRepository constructor.
     */
    public function __construct()
    {
        $db = new MySql();
        $this->db = $db->getInstance();
    }

    /**
     * @return array
     */
    public function getCampaigns(): array
    {
        $sql = "select c.id,c.position,c.name,c.description,c.hasBanner,c.banner,c.isActive,c.hasDayTimeRule,c.reduceType,c.reduceValue,c.startDate,c.endDate,c.dayTimeStart,c.dayTimeEnd,c.url
                from Campaigns c
                where (c.startDate <= date(now()) and c.endDate >= date(now()))
                or c.startDate <= (date(now()) + INTERVAL 14 DAY);";
        $result = $this->db->query( $sql );

        $allItems = $result->fetch_all( MYSQLI_ASSOC );

        foreach ( array_keys( $allItems ) as $key )
        {
            $allItems[ $key ] = $this->askForSingleItem( $allItems[$key] );
        }
        return $allItems;
    }

    public function askForSingleItem($line) : CampaignEntity
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