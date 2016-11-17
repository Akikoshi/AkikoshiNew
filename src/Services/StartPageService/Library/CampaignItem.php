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
class CampaignItem implements CampaignInterfaceNew
{
    /** @var  string */
    private $picture;
    
    /** @var  string */
    private $pictureUrl;
    
    /** @var  string */
    private $headline;
    
    /** @var  string */
    private $content;
    
    /** @var  string */
    private $linkText;
    
    /** @var  string */
    private $price;

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
     * @var string
     */
    private $banner;

    /**
     * CampaignItem constructor.
     * @param string $picture
     * @param string $pictureUrl
     * @param string $headline
     * @param string $content
     * @param string $linkText
     * @param string $price
     * @param string $name
     * @param string $description
     * @param string $hasBanner
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
    public function __construct(
        $picture,
        $pictureUrl,
        $headline,
        $content,
        $linkText,
        $price,
        $name,
        $description,
        $hasBanner,
        $isActive,
        $hasDayTimeRule,
        $reduceType,
        $reduceValue,
        $startDate,
        $endDate,
        $dayTimeStart,
        $dayTimeEnd,
        $url
    )
    {
        $this->picture = $picture;
        $this->pictureUrl = $pictureUrl;
        $this->headline = $headline;
        $this->content = $content;
        $this->linkText = $linkText;
        $this->price = $price;
        $this->name = $name;
        $this->description = $description;
        $this->hasBanner = $hasBanner;
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

    /**
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return string
     */
    public function getPictureUrl()
    {
        return $this->pictureUrl;
    }

    /**
     * @param string $pictureUrl
     */
    public function setPictureUrl($pictureUrl)
    {
        $this->pictureUrl = $pictureUrl;
    }

    /**
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * @param string $headline
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getLinkText()
    {
        return $this->linkText;
    }

    /**
     * @param string $linkText
     */
    public function setLinkText($linkText)
    {
        $this->linkText = $linkText;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
     * @return MediaFileInterface
     */
    public function getBanner() : MediaFileInterface
    {
        return $this->banner;
    }
}