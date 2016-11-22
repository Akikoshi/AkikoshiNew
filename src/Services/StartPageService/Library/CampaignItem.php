<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 14.09.2016
 * Time: 11:22
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Library;


use Class152\PizzaMamamia\Interfaces\Campaign\CampaignInterface;
use Class152\PizzaMamamia\Interfaces\Campaign\CampaignInterfaceNew;
use Class152\PizzaMamamia\Interfaces\Campaign\CampaignItemListInterface;
use Class152\PizzaMamamia\Interfaces\MediaFileInterface;

/**
 * Class CampaignItem
 * @package Class152\PizzaMamamia\Services\StartPageService\Library
 */
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
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function getHasBanner() : bool
    {
        return $this->hasBanner;
    }

    /**
     * @param boolean $hasBanner
     */
    public function setHasBanner($hasBanner)
    {
        $this->hasBanner = $hasBanner;
    }

    /**
     * @return string
     */
    public function getBanner() : string
    {
        return $this->banner;
    }

    /**
     * @param string $banner
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;
    }

    /**
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }

    /**
     * @param boolean $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * @return bool
     */
    public function getHasDayTimeRule() : bool
    {
        return $this->hasDayTimeRule;
    }

    /**
     * @param boolean $hasDayTimeRule
     */
    public function setHasDayTimeRule($hasDayTimeRule)
    {
        $this->hasDayTimeRule = $hasDayTimeRule;
    }

    /**
     * @return bool
     */
    public function getReduceType() : bool
    {
        return $this->reduceType;
    }

    /**
     * @param boolean $reduceType
     */
    public function setReduceType($reduceType)
    {
        $this->reduceType = $reduceType;
    }

    /**
     * @return float
     */
    public function getReduceValue() : float
    {
        return $this->reduceValue;
    }

    /**
     * @param float $reduceValue
     */
    public function setReduceValue($reduceValue)
    {
        $this->reduceValue = $reduceValue;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getStartDate() : \DateTimeImmutable
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeImmutable $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getEndDate() : \DateTimeImmutable
    {
        return $this->endDate;
    }

    /**
     * @param \DateTimeImmutable $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDayTimeStart() : \DateTimeImmutable
    {
        return $this->dayTimeStart;
    }

    /**
     * @param \DateTimeImmutable $dayTimeStart
     */
    public function setDayTimeStart($dayTimeStart)
    {
        $this->dayTimeStart = $dayTimeStart;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDayTimeEnd() : \DateTimeImmutable
    {
        return $this->dayTimeEnd;
    }

    /**
     * @param \DateTimeImmutable $dayTimeEnd
     */
    public function setDayTimeEnd($dayTimeEnd)
    {
        $this->dayTimeEnd = $dayTimeEnd;
    }

    /**
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return CampaignItemListInterface
     */
    public function getItems() : CampaignItemListInterface
    {
        // TODO: Implement getItems() method.
    }
}