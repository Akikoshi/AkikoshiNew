<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 14.09.2016
 * Time: 11:22
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Library;


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
     * @param string $linkText#
     */
    public function __construct(
        string $picture,
        string $pictureUrl,
        string $headline,
        string $content,
        string $linkText)
    {
        $this->picture = $picture;
        $this->pictureUrl = $pictureUrl;
        $this->headline = $headline;
        $this->content = $content;
        $this->linkText = $linkText;
    }

    /**
     * @return string
     */
    public function getPicture() : string
    {
        return $this->picture;
    }

    /**
     * @return string
     */
    public function getPictureUrl() : string
    {
        return $this->pictureUrl;
    }

    /**
     * @return string
     */
    public function getHeadline() : string
    {
        return $this->headline;
    }

    /**
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getLinkText() : string
    {
        return $this->linkText;
    }
}