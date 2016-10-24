<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 15:29
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Library;


use Class152\PizzaMamamia\Services\CampaignService\Repository\CampaignDetailRepository;
use Class152\PizzaMamamia\Services\CampaignService\Repository\Entities\CampaignDetailEntity;

class CampaignDetailFactory
{
    private $campaignDetailItemList;

    /**
     * CampaignDetailFactory constructor.
     * @param int $campaignId
     */
    public function __construct( int $campaignId )
    {
        $this->campaignDetailItemList = new CampaignDetailItemList();
        $repository = new CampaignDetailRepository();
        $campaigns  = $repository->getCampaignDetailItems( $campaignId );
        
        /** @var CampaignDetailEntity $campaign */
        foreach ( $campaigns as $campaign )
        {
            $this->campaignDetailItemList->addItem(
                new CampaignDetailItem(
                    $campaign->getPicture(),
                    $campaign->getPictureUrl(),
                    $campaign->getHeadline(),
                    $campaign->getContent(),
                    $campaign->getLinkText(),
                    $campaign->getPosition()
                )
            );
        }
    }

    /**
     * @return CampaignDetailItemList
     */
    public function getCampaignDetailItem() : CampaignDetailItemList
    {
        return $this->campaignDetailItemList;
    }
}