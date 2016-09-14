<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 13.09.2016
 * Time: 14:23
 */

namespace Class152\PizzaMamamia\Services\StartPageService;


use Class152\PizzaMamamia\Services\StartPageService\Library\SliderItemList;

class StartPageService
{
    /**
     * @return SliderItemList
     */
    public function getSlider() : SliderItemList
    {
        return new SliderItemList();
    }
}