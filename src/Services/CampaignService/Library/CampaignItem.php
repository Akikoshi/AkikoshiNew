<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 13:59
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Library;


class CampaignItem
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

    /**
     * CampaignItem constructor.
     * @param string $picture
     * @param string $pictureUrl
     * @param string $headline
     * @param string $content
     * @param string $linkText
     * @param int $id
     */
    public function __construct($picture, $pictureUrl, $headline, $content, $linkText, $id)
    {
        $this->picture = $picture;
        $this->pictureUrl = $pictureUrl;
        $this->headline = $headline;
        $this->content = $content;
        $this->linkText = $linkText;
        $this->id = $id;
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
    public function getId()
    {
        return $this->id;
    }
    
}