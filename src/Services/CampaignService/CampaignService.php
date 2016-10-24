<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 13:53
 */

namespace Class152\PizzaMamamia\Services\CampaignService;


use Class152\PizzaMamamia\Services\CampaignService\Library\CampaignDetailFactory;
use Class152\PizzaMamamia\Services\CampaignService\Library\CampaignDetailItemList;
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

    /**
     * @param int $campaignId
     * @return CampaignDetailItemList
     */
    public function getCampaignDetail( int $campaignId ) : CampaignDetailItemList
    {
        $campaignDetailFactory = new CampaignDetailFactory( $campaignId );
        return $campaignDetailFactory->getCampaignDetailItem();
    }
}