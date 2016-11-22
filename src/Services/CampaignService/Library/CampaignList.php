<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 24.10.2016
 * Time: 11:55
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Interfaces\Campaign\CampaignInterface;
use Class152\PizzaMamamia\Interfaces\Campaign\CampaignListInterface;

class CampaignList extends AbstractIterator implements CampaignListInterface
{
    public function __construct( array $array = null )
    {
        $this->iteratorArray = $array;
    }

    /**
     * @return CampaignInterface
     */
    public function current() : CampaignInterface
    {
        return parent::current();
    }

    /**
     * @param null|int|string $key
     * @return CampaignInterface
     */
    public function getElement( $key = null ) : CampaignInterface
    {
        return parent::getElement($key);
    }
}