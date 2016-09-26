<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 26.09.2016
 * Time: 14:27
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Repository\Entities;


class ProductGroupTeaserEntity
{
    /** @var  string */
    private $headline;

    /** @var  string */
    private $content;

    /** @var  string */
    private $pictureSrc;

    /** @var  string */
    private $teaserLink;

    /**
     * ProductGroupTeaserEntity constructor.
     * @param string $headline
     * @param string $content
     * @param string $pictureSrc
     * @param string $teaserLink
     */
    public function __construct($headline, $content, $pictureSrc, $teaserLink)
    {
        $this->headline = $headline;
        $this->content = $content;
        $this->pictureSrc = $pictureSrc;
        $this->teaserLink = $teaserLink;
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
    public function getPictureSrc()
    {
        return $this->pictureSrc;
    }

    /**
     * @param string $pictureSrc
     */
    public function setPictureSrc($pictureSrc)
    {
        $this->pictureSrc = $pictureSrc;
    }

    /**
     * @return string
     */
    public function getTeaserLink()
    {
        return $this->teaserLink;
    }

    /**
     * @param string $teaserLink
     */
    public function setTeaserLink($teaserLink)
    {
        $this->teaserLink = $teaserLink;
    }
}