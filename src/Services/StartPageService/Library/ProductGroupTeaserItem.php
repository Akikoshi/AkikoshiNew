<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 26.09.2016
 * Time: 14:26
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Library;


class ProductGroupTeaserItem
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
     * ProductGroupTeaserItem constructor.
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
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getPictureSrc()
    {
        return $this->pictureSrc;
    }

    /**
     * @return string
     */
    public function getTeaserLink()
    {
        return $this->teaserLink;
    }


}