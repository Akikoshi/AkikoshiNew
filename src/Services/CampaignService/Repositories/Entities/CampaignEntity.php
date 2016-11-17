<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 24.10.2016
 * Time: 10:56
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Repositories\Entities;


use Class152\PizzaMamamia\Services\CampaignService\Library\CampaignItemList;
use Class152\PizzaMamamia\Services\ProductDetailService\Library\MediaFile;

class CampaignEntity
{
    /** @var  string */
    private $id;

    /** @var  string */
    private $name;

    /** @var  string */
    private $description;

    /** @var  bool */
    private $hasBanner;

    /** @var  string */
    private $banner;

    /** @var  MediaFile */
    private $url;

    /** @var  bool */
    private $isActive;

    /** @var  bool */
    private $isActiveAtDate = false;

    /** @var bool */
    private $hasDayTimeRule;

    /** @var  bool */
    private $isReduceByPercent;

    /** @var  bool */
    private $isReduceToFixPrice;

    /** @var  string */
    private $reduceRule;

    /** @var  string */
    private $reduceValue;

    /** @var  \DateTimeImmutable */
    private $startDate;

    /** @var  \DateTimeImmutable */
    private $endDate;

    /** @var  \DateTimeImmutable */
    private $dayTimeStart;

    /** @var  \DateTimeImmutable */
    private $dayTimeEnd;

    /** @var  CampaignItemList */
    private $itemList;

    /**
     * CampaignEntity constructor.
     * @param string $id
     * @param string $name
     * @param string $description
     * @param string $hasBanner
     * @param string $banner
     * @param string $url
     * @param string $isActive
     * @param string $isActiveAtDate
     * @param string $hasDayTimeRule
     * @param string $isReduceByPercent
     * @param string $isReduceToFixPrice
     * @param string $reduceRule
     * @param string $reduceValue
     * @param string $startDate
     * @param string $endDate
     * @param string $dayTimeStart
     * @param string $dayTimeEnd
     * @param string $itemList
     */
    public function __construct(
        string $id,
        string $name,
        string $description,
        string $hasBanner,
        string $banner,
        string $url,
        string $isActive,
        string $isActiveAtDate,
        string $hasDayTimeRule,
        string $isReduceByPercent,
        string $isReduceToFixPrice,
        string $reduceRule,
        string $reduceValue,
        string $startDate,
        string $endDate,
        string $dayTimeStart,
        string $dayTimeEnd,
        string $itemList)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->hasBanner = $hasBanner;
        $this->banner = $banner;
        $this->isActive = $isActive;
        $this->isActiveAtDate = $isActiveAtDate;
        $this->hasDayTimeRule = $hasDayTimeRule;
        $this->isReduceByPercent = $isReduceByPercent;
        $this->isReduceToFixPrice = $isReduceToFixPrice;
        $this->reduceRule = $reduceRule;
        $this->reduceValue = $reduceValue;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->dayTimeStart = $dayTimeStart;
        $this->dayTimeEnd = $dayTimeEnd;
        $this->itemList = $itemList;
        $this->url = $url;
        // TODO: fix error on Argument 13
    }


    /**
     * @return string
     */
    public function getId()
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
    public function getName()
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
    public function getDescription()
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
     * @return boolean
     */
    public function isHasBanner()
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
     * @return MediaFile
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * @param MediaFile $banner
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;
    }

    /**
     * @return boolean
     */
    public function isIsActive()
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
     * @return boolean
     */
    public function isIsActiveAtDate()
    {
        return $this->isActiveAtDate;
    }

    /**
     * @param boolean $isActiveAtDate
     */
    public function setIsActiveAtDate($isActiveAtDate)
    {
        $this->isActiveAtDate = $isActiveAtDate;
    }

    /**
     * @return boolean
     */
    public function isHasDayTimeRule()
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
     * @return boolean
     */
    public function isIsReduceByPercent()
    {
        return $this->isReduceByPercent;
    }

    /**
     * @param boolean $isReduceByPercent
     */
    public function setIsReduceByPercent($isReduceByPercent)
    {
        $this->isReduceByPercent = $isReduceByPercent;
    }

    /**
     * @return boolean
     */
    public function isIsReduceToFixPrice()
    {
        return $this->isReduceToFixPrice;
    }

    /**
     * @param boolean $isReduceToFixPrice
     */
    public function setIsReduceToFixPrice($isReduceToFixPrice)
    {
        $this->isReduceToFixPrice = $isReduceToFixPrice;
    }

    /**
     * @return string
     */
    public function getReduceRule()
    {
        return $this->reduceRule;
    }

    /**
     * @param string $reduceRule
     */
    public function setReduceRule($reduceRule)
    {
        $this->reduceRule = $reduceRule;
    }

    /**
     * @return string
     */
    public function getReduceValue()
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
    public function getStartDate()
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
    public function getEndDate()
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
    public function getDayTimeStart()
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
    public function getDayTimeEnd()
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
     * @return MediaFile
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param MediaFile $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return CampaignItemList
     */
    public function getItemList()
    {
        return $this->itemList;
    }

    /**
     * @param CampaignItemList $itemList
     */
    public function setItemList($itemList)
    {
        $this->itemList = $itemList;
    }
}