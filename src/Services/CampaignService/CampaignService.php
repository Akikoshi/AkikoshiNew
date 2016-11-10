<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 24.10.2016
 * Time: 10:53
 */

namespace Class152\PizzaMamamia\Services\CampaignService;

use Class152\PizzaMamamia\Http\Request;
use Class152\PizzaMamamia\Services\CampaignService\Library\CampaignFactory;
use Class152\PizzaMamamia\Services\CampaignService\Library\CampaignItem;
use Class152\PizzaMamamia\Services\CampaignService\Library\CampaignList;
use Class152\PizzaMamamia\Services\CampaignService\Library\CampaignListFactory;

class CampaignService
{
    /** @var Request  */
    private $request;

    /**
     * CampaignService constructor.
     * @param Request $request
     */
    public function __construct(Request $request )
    {
        $this->request = $request;
    }

    /**
     * @return CampaignItem
     */
    public function getCampaignItem() : CampaignItem
    {
        $campaignItem = new CampaignFactory();
        return $campaignItem->getCampaignItem();
    }

    /**
     * @return CampaignList
     */
    public function getCampaignList() : CampaignList
    {
        $campaignList = new CampaignListFactory();
        return $campaignList->getCampaignList();
    }

    public function getCampaignDetail($campaignId)
    {
        return $this->getCampaignDetail();
    }
}