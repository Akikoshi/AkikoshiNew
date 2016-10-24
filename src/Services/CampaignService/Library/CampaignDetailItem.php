<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 15:29
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Library;


class CampaignDetailItem
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
     * CampaignDetailItem constructor.
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
     * @return string
     */
    public function getPictureUrl()
    {
        return $this->pictureUrl;
    }

    /**
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getLinkText()
    {
        return $this->linkText;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }
}