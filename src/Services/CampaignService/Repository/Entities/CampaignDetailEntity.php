<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 15:31
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Repository\Entities;


class CampaignDetailEntity
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

    /** @var  int */
    private $position;

    /**
     * CampaignDetailEntity constructor.
     * @param string $picture
     * @param string $pictureUrl
     * @param string $headline
     * @param string $content
     * @param string $linkText
     * @param int $position
     */
    public function __construct($picture, $pictureUrl, $headline, $content, $linkText, $position)
    {
        $this->picture = $picture;
        $this->pictureUrl = $pictureUrl;
        $this->headline = $headline;
        $this->content = $content;
        $this->linkText = $linkText;
        $this->position = $position;
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
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }
}