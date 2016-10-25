<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 24.10.2016
 * Time: 11:32
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Library;


use Class152\PizzaMamamia\Interfaces\Campaign\CampaignInterface;
use Class152\PizzaMamamia\Interfaces\Campaign\CampaignItemListInterface;
use Class152\PizzaMamamia\Interfaces\MediaFileInterface;

class CampaignItem implements CampaignInterface
{

    /**
     * @return string
     */
    public function getId() : string
    {
        // TODO: Implement getId() method.
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        // TODO: Implement getName() method.
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        // TODO: Implement getDescription() method.
    }

    /**
     * @return bool
     */
    public function hasBanner() : bool
    {
        // TODO: Implement hasBanner() method.
    }

    /**
     * @return MediaFileInterface
     */
    public function getBanner() : MediaFileInterface
    {
        // TODO: Implement getBanner() method.
    }

    /**
     * @return bool
     */
    public function isActive() : bool
    {
        // TODO: Implement isActive() method.
    }

    /**
     * @param \DateTimeImmutable $date
     *
     * @return bool
     */
    public function isActiveAtDate(\DateTimeImmutable $date) : bool
    {
        // TODO: Implement isActiveAtDate() method.
    }

    /**
     * @return bool
     */
    public function isReducedByPercent() : bool
    {
        // TODO: Implement isReducedByPercent() method.
    }

    /**
     * @return bool
     */
    public function isReducedToFixPrice() : bool
    {
        // TODO: Implement isReducedToFixPrice() method.
    }

    /**
     * percent|fixprice
     *
     * @return mixed
     */
    public function getReduceRule()
    {
        // TODO: Implement getReduceRule() method.
    }

    /**
     * @return float
     */
    public function getReduceValue() : float
    {
        // TODO: Implement getReduceValue() method.
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getStartDate() : \DateTimeImmutable
    {
        // TODO: Implement getStartDate() method.
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getEndDate() : \DateTimeImmutable
    {
        // TODO: Implement getEndDate() method.
    }

    /**
     * @return bool
     */
    public function hasDayTimeRule() : bool
    {
        // TODO: Implement hasDayTimeRule() method.
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDayTimeStart() : \DateTimeImmutable
    {
        // TODO: Implement getDayTimeStart() method.
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDayTimeEnd() : \DateTimeImmutable
    {
        // TODO: Implement getDayTimeEnd() method.
    }

    /**
     * @return CampaignItemListInterface
     */
    public function getItems() : CampaignItemListInterface
    {
        // TODO: Implement getItems() method.
    }
}