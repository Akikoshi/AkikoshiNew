<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 09:11
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Repository\Interfaces;


use Class152\PizzaMamamia\Services\StartPageService\Repository\Entities\CampaignEntity;

interface CampaigneInterface
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