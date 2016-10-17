<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 13:53
 */

namespace Class152\PizzaMamamia\Services\CampaignService;


use Class152\PizzaMamamia\Services\CampaignService\Library\CampaignFactory;
use Class152\PizzaMamamia\Services\CampaignService\Library\CampaignItemList;

class CampaignService
{
    /**
     * @return CampaignItemList
     */
    public function getCampaign() : CampaignItemList
    {
        $campaignFactory = new CampaignFactory();
        return $campaignFactory->getCampaignItem();
    }
}