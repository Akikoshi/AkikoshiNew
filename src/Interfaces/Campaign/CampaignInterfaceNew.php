<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.11.2016
 * Time: 15:25
 */
namespace Class152\PizzaMamamia\Interfaces\Campaign;
use Class152\PizzaMamamia\Interfaces\MediaFileInterface;


/**
 * Class CampaignItem
 * @package Class152\PizzaMamamia\Services\StartPageService\Library
 */
interface CampaignInterfaceNew
{
    /**
     * @return MediaFileInterface
     */
    public function getBanner() : MediaFileInterface;

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getIsActive();

    /**
     * @return string
     */
    public function getHasDayTimeRule();

    /**
     * @return string
     */
    public function getReduceType();

    /**
     * @return string
     */
    public function getReduceValue();

    /**
     * @return string
     */
    public function getStartDate();

    /**
     * @return string
     */
    public function getEndDate();

    /**
     * @return string
     */
    public function getDayTimeStart();

    /**
     * @return string
     */
    public function getDayTimeEnd();
}