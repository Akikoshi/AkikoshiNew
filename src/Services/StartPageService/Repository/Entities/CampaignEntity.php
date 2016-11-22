<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 26.09.2016
 * Time: 13:34
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Repository\Entities;


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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getHasBanner()
    {
        return $this->hasBanner;
    }

    /**
     * @return string
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * @return string
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @return string
     */
    public function getHasDayTimeRule()
    {
        return $this->hasDayTimeRule;
    }

    /**
     * @return string
     */
    public function getReduceType()
    {
        return $this->reduceType;
    }

    /**
     * @return string
     */
    public function getReduceValue()
    {
        return $this->reduceValue;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @return string
     */
    public function getDayTimeStart()
    {
        return $this->dayTimeStart;
    }

    /**
     * @return string
     */
    public function getDayTimeEnd()
    {
        return $this->dayTimeEnd;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}