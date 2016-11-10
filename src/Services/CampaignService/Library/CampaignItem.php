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
use Class152\PizzaMamamia\Services\StartPageService\Library\CampaignItemList;

class CampaignItem implements CampaignInterface
{
    /** @var string */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $description;

    /** @var MediaFileInterface */
    private $banner;

    /** @var bool */
    private $hasBanner;

    /** @var bool */
    private $isActive;

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function hasBanner() : bool
    {
        return $this->hasBanner;
    }

    /**
     * @return MediaFileInterface
     */
    public function getBanner() : MediaFileInterface
    {
        return $this->banner;
    }

    /**
     * @return bool
     */
    public function isActive() : bool
    {
        return $this->isActive;
    }

    /**
     * @param \DateTimeImmutable $date
     *
     * @return bool
     */
    public function isActiveAtDate(\DateTimeImmutable $date) : bool
    {
        // TODO: Implement isActiveAtDate() method.
        return false;
    }

    /**
     * @return bool
     */
    public function isReducedByPercent() : bool
    {
        // TODO: Implement isReducedByPercent() method.
        return false;
    }

    /**
     * @return bool
     */
    public function isReducedToFixPrice() : bool
    {
        // TODO: Implement isReducedToFixPrice() method.
        return false;
    }

    /**
     * percent|fixprice
     *
     * @return mixed
     */
    public function getReduceRule()
    {
        // TODO: Implement getReduceRule() method.
        return false;
    }

    /**
     * @return float
     */
    public function getReduceValue() : float
    {
        // TODO: Implement getReduceValue() method.
        return 0;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getStartDate() : \DateTimeImmutable
    {
        // TODO: Implement getStartDate() method.
        return new \DateTimeImmutable();
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getEndDate() : \DateTimeImmutable
    {
        // TODO: Implement getEndDate() method.
        return new \DateTimeImmutable();
    }

    /**
     * @return bool
     */
    public function hasDayTimeRule() : bool
    {
        // TODO: Implement hasDayTimeRule() method.
        return false;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDayTimeStart() : \DateTimeImmutable
    {
        // TODO: Implement getDayTimeStart() method.
        return new \DateTimeImmutable();
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDayTimeEnd() : \DateTimeImmutable
    {
        // TODO: Implement getDayTimeEnd() method.
        return new \DateTimeImmutable();
    }

    /**
     * @return CampaignItemListInterface
     */
    public function getItems() : CampaignItemListInterface
    {
        // TODO: Implement getItems() method.
        return new CampaignItemList([]);
    }
}