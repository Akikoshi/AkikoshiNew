<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 14.09.2016
 * Time: 11:27
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Interfaces\Campaign\CampaignInterface;
use Class152\PizzaMamamia\Interfaces\Campaign\CampaignInterfaceNew;
use Class152\PizzaMamamia\Interfaces\Campaign\CampaignItemListInterface;
use Class152\PizzaMamamia\Services\StartPageService\Exceptions\CampaignListNeedsCampaignItemException;

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
     * @return CampaignInterfaceNew
     */
    public function current() : CampaignInterfaceNew
    {
        return parent::current();
    }

    /**
     * @param null|int|string $key
     * @return CampaignInterface
     */
    public function getElement($key = null) : CampaignInterface
    {
        return parent::getElement($key);
    }


}