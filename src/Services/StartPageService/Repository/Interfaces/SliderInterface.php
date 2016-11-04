<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 09:12
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Repository\Interfaces;


use Class152\PizzaMamamia\Services\StartPageService\Repository\Entities\SliderEntity;

interface SliderInterface
{
    /**
     * @return array
     */
    public function getSliderItems() : array;

    /**
     * @param $line
     * @return SliderEntity
     */
    public function askForSingleItemSlider( $line ) : SliderEntity;
}