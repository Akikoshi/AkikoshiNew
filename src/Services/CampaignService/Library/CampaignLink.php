<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 25.10.2016
 * Time: 13:55
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Library;


use Class152\PizzaMamamia\Interfaces\LinkInterface;

class CampaignLink implements LinkInterface
{
    /** @var string */
    private $title;

    /** @var string */
    private $text;

    /** @var string */
    private $url;

    /** @var string */
    private $css;

    /**
     * CampaignLink constructor.
     * @param string $url
     * @param string $text
     * @param string $title
     * @param string $css
     */
    public function __construct( string $url, string $text, string $title='', string $css='' )
    {
        $this->css = $css;
        $this->title = $title;
        $this->text = $text;
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getCss()
    {
        return $this->css;
    }

}