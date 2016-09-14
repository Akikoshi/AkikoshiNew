<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 13.09.2016
 * Time: 14:23
 */

namespace Class152\PizzaMamamia\Services\StartPageService;


use Class152\PizzaMamamia\Services\StartPageService\Library\CampaignFactory;
use Class152\PizzaMamamia\Services\StartPageService\Library\CampaignItem;
use Class152\PizzaMamamia\Services\StartPageService\Library\CampaignItemList;
use Class152\PizzaMamamia\Services\StartPageService\Library\SliderFactory;
use Class152\PizzaMamamia\Services\StartPageService\Library\SliderItemList;

class StartPageService
{
    /**
     * @return SliderItemList
     */
    public function getSlider() : SliderItemList
    {
        $sliderFactory = new SliderFactory();
        return $sliderFactory->getSliderItem();
    }

    /**
     * @return CampaignItemList
     */
    public function getCampaign() : CampaignItemList
    {
        $campaignFactory = new CampaignFactory();
        return $campaignFactory->getCampaignItem();
    }
}