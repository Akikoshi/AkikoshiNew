<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 13:59
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Services\CampaignService\Exceptions\CampaignListNeedsCampaignItemException;

class CampaignItemList extends AbstractIterator
{
    /**
     * CampaignItemList constructor.
     * @param array|null $array
     * @throws CampaignListNeedsCampaignItemException
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
                || ! is_a( $array[$keys], 'CampaignItem' )
            )
            {
                throw new CampaignListNeedsCampaignItemException(
                    'constructor of CampaignItemList can only use CampaignItem objects'
                );
            }
        }

        $this->iteratorArray = $array;

    }

    /**
     * @param CampaignItem $campaignItem
     */
    public function addItem( CampaignItem $campaignItem )
    {
        $this->iteratorArray[] = $campaignItem;
    }

    /**
     * @return CampaignItem
     */
    public function current() : CampaignItem
    {
        return parent::current();
    }
}