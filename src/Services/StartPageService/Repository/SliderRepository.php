<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 26.09.2016
 * Time: 10:24
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Repository;


use Class152\PizzaMamamia\Database\MySql;
use Class152\PizzaMamamia\Services\StartPageService\Repository\Entities\SliderEntity;

class SliderRepository
{
    private $db;

    public function __construct()
    {
        $db = new MySql();
        $this->db = $db->getInstance();
    }

    /**
     * @return SliderEntity
     */
    public function getSliderItems()
    {
        $sql = "select * from Slider where active = 'Y' order by position asc;";
        $result = $this->db->query( $sql );
        $allItems = $result->fetch_all(MYSQLI_ASSOC);
        foreach( array_keys( $allItems ) as $key )
        {
            $allItems[$key] = $this->askForSingleItemSlider( $allItems[$key] );
        }
        return $allItems;
    }

    /**
     * @param array $line
     * @return SliderEntity
     */
    private function askForSingleItemSlider( $line )
    {
        return new SliderEntity(
            $line['src'],
            $line['headline'],
            $line['content'],
            $line['button'],
            $line['picUrl'],
            $line['position']
        );
    }
}