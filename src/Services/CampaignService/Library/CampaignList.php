<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 24.10.2016
 * Time: 11:55
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Interfaces\Campaign\CampaignListInterface;
use Class152\PizzaMamamia\Services\CampaignService\Exceptions\CampaignEmptyException;

class CampaignList extends AbstractIterator implements CampaignListInterface
{
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
                throw new CampaignEmptyException(
                    'constructor of CampaignItemList can only use CampaignItem objects'
                );
            }
        }

        $this->iteratorArray = $array;
    }

    /**
     * @return CampaignItem
     */
    public function current() : CampaignItem
    {
        return parent::current();
    }
}