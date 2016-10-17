<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 26.09.2016
 * Time: 10:24
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Repository\Entities;


class SliderEntity
{
    /** @var string */
    private $picture;
    
    /** @var  string */
    private $headline;
    
    /** @var  string */
    private $content;
    
    /** @var  string */
    private $button;

    /** @var string */
    private $pictureUrl;

    /**
     * SliderEntity constructor.
     * @param string $picture
     * @param string $headline
     * @param string $content
     * @param string $button
     * @param string $pictureUrl
     */
    public function __construct($picture, $headline, $content, $button, $pictureUrl)
    {
        $this->picture = $picture;
        $this->headline = $headline;
        $this->content = $content;
        $this->button = $button;
        $this->pictureUrl = $pictureUrl;
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
    public function getButton()
    {
        return $this->button;
    }

    /**
     * @param string $button
     */
    public function setButton($button)
    {
        $this->button = $button;
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
}