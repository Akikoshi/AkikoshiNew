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

class CampaignItem implements CampaignInterface
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var bool
     */
    private $hasBanner;

    /**
     * @var string
     */
    private $banner;

    /**
     * @var bool
     */
    private $isActive;

    /**
     * @var bool
     */
    private $hasDayTimeRule;

    /**
     * @var bool
     */
    private $reduceType;

    /**
     * @var float
     */
    private $reduceValue;

    /**
     * @var \DateTimeImmutable
     */
    private $startDate;

    /**
     * @var \DateTimeImmutable
     */
    private $endDate;

    /**
     * @var \DateTimeImmutable
     */
    private $dayTimeStart;

    /**
     * @var \DateTimeImmutable
     */
    private $dayTimeEnd;

    /**
     * @var string
     */
    private $url;

    /**
     * CampaignItem constructor.
     * @param string $id
     * @param string $name
     * @param string $description
     * @param bool $hasBanner
     * @param string $banner
     * @param bool $isActive
     * @param bool $hasDayTimeRule
     * @param bool $reduceType
     * @param float $reduceValue
     * @param \DateTimeImmutable $startDate
     * @param \DateTimeImmutable $endDate
     * @param \DateTimeImmutable $dayTimeStart
     * @param \DateTimeImmutable $dayTimeEnd
     * @param string $url
     */
    public function __construct($id, $name, $description, $hasBanner, $banner, $isActive, $hasDayTimeRule, $reduceType, $reduceValue, \DateTimeImmutable $startDate, \DateTimeImmutable $endDate, \DateTimeImmutable $dayTimeStart, \DateTimeImmutable $dayTimeEnd, $url)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->hasBanner = $hasBanner;
        $this->banner = $banner;
        $this->isActive = $isActive;
        $this->hasDayTimeRule = $hasDayTimeRule;
        $this->reduceType = $reduceType;
        $this->reduceValue = $reduceValue;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->dayTimeStart = $dayTimeStart;
        $this->dayTimeEnd = $dayTimeEnd;
        $this->url = $url;
    }

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
     * @return boolean
     */
    public function isHasBanner() : bool
    {
        return $this->hasBanner;
    }

    /**
     * @return string
     */
    public function getBanner() : string
    {
        return $this->banner;
    }

    /**
     * @return boolean
     */
    public function isIsActive() : bool
    {
        return $this->isActive;
    }

    /**
     * @return boolean
     */
    public function isHasDayTimeRule() : bool
    {
        return $this->hasDayTimeRule;
    }

    /**
     * @return boolean
     */
    public function isReduceType() : bool
    {
        return $this->reduceType;
    }

    /**
     * @return float
     */
    public function getReduceValue() : float
    {
        return $this->reduceValue;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getStartDate() : \DateTimeImmutable
    {
        return $this->startDate;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getEndDate() : \DateTimeImmutable
    {
        return $this->endDate;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDayTimeStart() : \DateTimeImmutable
    {
        return $this->dayTimeStart;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDayTimeEnd() : \DateTimeImmutable
    {
        return $this->dayTimeEnd;
    }

    /**
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }

    /**
     * @return bool
     */
    public function getHasBanner() : bool
    {
        // TODO: Implement getHasBanner() method.
    }

    /**
     * @return bool
     */
    public function getIsActive() : bool
    {
        // TODO: Implement getIsActive() method.
    }

    /**
     * @return bool
     */
    public function getHasDayTimeRule() : bool
    {
        // TODO: Implement getHasDayTimeRule() method.
    }

    /**
     * @return bool
     */
    public function getReduceType() : bool
    {
        // TODO: Implement getReduceType() method.
    }

    /**
     * @return CampaignItemListInterface
     */
    public function getItems() : CampaignItemListInterface
    {
        // TODO: Implement getItems() method.
    }
}