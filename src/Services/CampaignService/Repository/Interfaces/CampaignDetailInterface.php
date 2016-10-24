<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 15:31
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Repository\Interfaces;


use Class152\PizzaMamamia\Services\CampaignService\Repository\Entities\CampaignDetailEntity;

interface CampaignDetailInterface
{
    /**
     * @param $campaignId
     * @return array
     */
    public function getCampaignDetailItems( int $campaignId ) : array;

    /**
     * @param $line
     * @return CampaignDetailEntity
     */
    public function askForSingleCampaignDetailItem( $line ) : CampaignDetailEntity;
}