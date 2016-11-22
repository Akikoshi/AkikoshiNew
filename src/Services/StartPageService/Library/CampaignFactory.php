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
                $campaign->getId(),
                $campaign->getName(),
                $campaign->getDescription(),
                $campaign->getHasBanner(),
                $campaign->getBanner(),
                $campaign->getIsActive(),
                $campaign->getHasDayTimeRule(),
                $campaign->getReduceType(),
                $campaign->getReduceValue(),
                new \DateTimeImmutable($campaign->getStartDate()),
                new \DateTimeImmutable($campaign->getEndDate()),
                new \DateTimeImmutable($campaign->getDayTimeStart()),
                new \DateTimeImmutable($campaign->getDayTimeEnd()),
                $campaign->getUrl()
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