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
     * @var string
     */
    private $hasBanner;

    /**
     * @var string
     */
    private $banner;

    /**
     * @var string
     */
    private $isActive;

    /**
     * @var string
     */
    private $hasDayTimeRule;

    /**
     * @var string
     */
    private $reduceType;

    /**
     * @var string
     */
    private $reduceValue;

    /**
     * @var string
     */
    private $startDate;

    /**
     * @var string
     */
    private $endDate;

    /**
     * @var string
     */
    private $dayTimeStart;

    /**
     * @var string
     */
    private $dayTimeEnd;

    /**
     * @var string
     */
    private $url;

    /**
     * CampaignEntity constructor.
     * @param string $id
     * @param string $name
     * @param string $description
     * @param string $hasBanner
     * @param string $banner
     * @param string $isActive
     * @param string $hasDayTimeRule
     * @param string $reduceType
     * @param string $reduceValue
     * @param string $startDate
     * @param string $endDate
     * @param string $dayTimeStart
     * @param string $dayTimeEnd
     * @param string $url
     */
    public function __construct($id, $name, $description, $hasBanner, $banner, $isActive, $hasDayTimeRule, $reduceType, $reduceValue, $startDate, $endDate, $dayTimeStart, $dayTimeEnd, $url)
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
     * @return string
     */
    public function getHasBanner()
    {
        return $this->hasBanner;
    }

    /**
     * @param string $hasBanner
     */
    public function setHasBanner($hasBanner)
    {
        $this->hasBanner = $hasBanner;
    }

    /**
     * @return string
     */
    public function getBanner()
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
     * @return string
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param string $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * @return string
     */
    public function getHasDayTimeRule()
    {
        return $this->hasDayTimeRule;
    }

    /**
     * @param string $hasDayTimeRule
     */
    public function setHasDayTimeRule($hasDayTimeRule)
    {
        $this->hasDayTimeRule = $hasDayTimeRule;
    }

    /**
     * @return string
     */
    public function getReduceType()
    {
        return $this->reduceType;
    }

    /**
     * @param string $reduceType
     */
    public function setReduceType($reduceType)
    {
        $this->reduceType = $reduceType;
    }

    /**
     * @return string
     */
    public function getReduceValue()
    {
        return $this->reduceValue;
    }

    /**
     * @param string $reduceValue
     */
    public function setReduceValue($reduceValue)
    {
        $this->reduceValue = $reduceValue;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getDayTimeStart()
    {
        return $this->dayTimeStart;
    }

    /**
     * @param string $dayTimeStart
     */
    public function setDayTimeStart($dayTimeStart)
    {
        $this->dayTimeStart = $dayTimeStart;
    }

    /**
     * @return string
     */
    public function getDayTimeEnd()
    {
        return $this->dayTimeEnd;
    }

    /**
     * @param string $dayTimeEnd
     */
    public function setDayTimeEnd($dayTimeEnd)
    {
        $this->dayTimeEnd = $dayTimeEnd;
    }

    /**
     * @return string
     */
    public function getUrl()
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
}