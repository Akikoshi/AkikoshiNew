<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 24.10.2016
 * Time: 11:32
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Library;

use Class152\PizzaMamamia\Services\CampaignService\Repositories\CampaignRepository;

class CampaignListFactory
{



















    
    private $campaignItem;

    /** @var array */
    private $campaigns = [];

    public function __construct()
    {
        $this->campaignItem = new CampaignItem();
        $repository = new CampaignRepository();
        $campaigns = $repository->getCampaigns();

        foreach (array_keys($campaigns) as $key) {
            $campaigns[$key] = new CampaignItem(
                $campaigns[$key]['id'],
                $campaigns[$key]['name'],
                $campaigns[$key]['$description'],
                $campaigns[$key]['$hasBanner'],
                $campaigns[$key]['MediaFile $banner'],
                $campaigns[$key]['$isActive'],
                $campaigns[$key]['$isActiveAtDate'],
                $campaigns[$key]['$hasTimeRule'],
                $campaigns[$key]['$isReduceByPercent'],
                $campaigns[$key]['$isReduceToFixPrice'],
                $campaigns[$key]['$reduceRule'],
                $campaigns[$key]['$reduceValue'],
                $campaigns[$key]['$startDate'],
                $campaigns[$key]['$endDate'],
                $campaigns[$key]['$dayTimeStart'],
                $campaigns[$key]['$dayTimeEnd'],
                new CampaignMediaFile(
                    $campaigns[$key]['id'],
                    $campaigns[$key]['mime'],
                    $campaigns[$key]['height'],
                    $campaigns[$key]['width'],
                    $campaigns[$key]['height'],
                    $campaigns[$key]['thumbHeight'],
                    $campaigns[$key]['thumbWidth'],
                    $campaigns[$key]['bigHeight'],
                    $campaigns[$key]['bigWidth'],
                    $campaigns[$key]['url'],
                    $campaigns[$key]['thumbUrl'],
                    $campaigns[$key]['bigUrl'],
                    $campaigns[$key]['titleTag'],
                    $campaigns[$key]['altTag']
                )
            );
        }
    }

    /**
     * @return CampaignItem
     */
    public function getCampaignItem() : CampaignItem
    {
        return $this->campaignItem;
    }
}