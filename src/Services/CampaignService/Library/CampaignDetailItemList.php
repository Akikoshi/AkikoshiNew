<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 15:29
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Services\CampaignService\Exceptions\CampaignDetailItemNeedsCampaignDetailItemException;

class CampaignDetailItemList extends AbstractIterator
{
    /**
     * CampaignDetailItemList constructor.
     * @param array|null $array
     * @throws CampaignDetailItemNeedsCampaignDetailItemException
     */
    public function __construct( array $array = null )
    {
        if( is_null( $array ) )
        {
            return;
        }

        foreach (array_keys( $array ) as $keys)
        {
            if(
                ! is_object( $array[$keys] )
                || ! is_a( $array[$keys], 'CampaignDetailItem' )
            )
            {
                throw new CampaignDetailItemNeedsCampaignDetailItemException(
                    'constructor of CampaignItemList can only use CampaignDetailItem objects'
                );
            }
        }

        $this->iteratorArray = $array;

    }

    /**
     * @param CampaignDetailItem $campaignDetailItem
     */
    public function addItem( CampaignDetailItem $campaignDetailItem )
    {
        $this->iteratorArray[] = $campaignDetailItem;
    }

    /**
     * @return CampaignDetailItem
     */
    public function current() : CampaignDetailItem
    {
        return parent::current();
    }
}