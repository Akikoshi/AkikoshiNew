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
use Class152\PizzaMamamia\Services\StartPageService\Repository\Interfaces\SliderInterface;

class SliderRepository implements SliderInterface
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
    public function getSliderItems() : array
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
     * @param $line
     * @return SliderEntity
     */
    public function askForSingleItemSlider( $line ) : SliderEntity
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