<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 14.09.2016
 * Time: 11:11
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Library;


use Class152\PizzaMamamia\Services\StartPageService\Repository\CampaignRepository;
use Class152\PizzaMamamia\Services\StartPageService\Repository\Entities\CampaignEntity;

class CampaignFactory
{
    private $campaignItemList;

    /**
     * CampaignFactory constructor.
     */
    public function __construct()
    {
        $this->campaignItemList = new CampaignItemList();
        $repository = new CampaignRepository();
        $campaigns  = $repository->getCampaignItems();

        /** @var CampaignEntity $campaign */
        foreach ( $campaigns as $campaign )
        {
            $this->campaignItemList->addItem(
                new CampaignItem(
                    $campaign->getPicture(),
                    $campaign->getPictureUrl(),
                    $campaign->getHeadline(),
                    $campaign->getContent(),
                    $campaign->getLinkText(),
                    $campaign->getPrice()
                )
            );
        }
    }

    /**
     * @return CampaignItemList
     */
    public function getCampaignItem() : CampaignItemList
    {
        return $this->campaignItemList;
    }
}