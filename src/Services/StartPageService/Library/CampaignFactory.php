<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 14.09.2016
 * Time: 11:11
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Library;


class CampaignFactory
{
    private $campaignItemList;

    public function __construct()
    {
        $this->campaignItemList = new CampaignItemList;

        $this->campaignItemList->addItem(
            new CampaignItem(
                'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                'campaign/index',
                'Überschrift: Ranger',
                'Text Text Text Text Text Text Text Text Text Text Text Text Text Text',
                'Ranger'
            )
        );

        $this->campaignItemList->addItem(
            new CampaignItem(
                'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                'campaign/index',
                'Überschrift: Phil',
                'Text Text Text Text Text Text Text Text Text Text Text Text Text Text',
                'Phil'
            )
        );

        $this->campaignItemList->addItem(
            new CampaignItem(
                'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                'campaign/index',
                'Überschrift: Olli',
                'Text Text Text Text Text Text Text Text Text Text Text Text Text Text',
                'Olli'
            )
        );
    }
    
    public function getCampaignItem() : CampaignItemList
    {
        return $this->campaignItemList;
    }
}