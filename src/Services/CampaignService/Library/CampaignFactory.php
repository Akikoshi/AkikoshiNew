<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 13:59
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Library;


use Class152\PizzaMamamia\Services\CampaignService\Repository\CampaignRepository;
use Class152\PizzaMamamia\Services\CampaignService\Repository\Entities\CampaignEntity;

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
                    $campaign->getId()
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