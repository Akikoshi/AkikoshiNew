<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 13:58
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Repository\Interfaces;


use Class152\PizzaMamamia\Services\CampaignService\Repository\Entities\CampaignEntity;

interface CampaignInterface
{
    /**
     * @return array
     */
    public function getCampaignItems() : array;

    /**
     * @param $line
     * @return CampaignEntity
     */
    public function askForSingleCampaignItem( $line ) : CampaignEntity;
}