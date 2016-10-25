<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 11:06
 */

namespace Class152\PizzaMamamia\Services\ProductListService\values;


use Class152\PizzaMamamia\Interfaces\LinkInterface;

class Link implements LinkInterface
{
    /** @var  string */
    private $url;

    /** @var  string */
    private $text;

    /** @var  string */
    private $title;

    /** @var  string */
    private $css;

    /**
     * Link constructor.
     *
     * @param string $url
     * @param string $text
     * @param string $title
     * @param string $css
     */
    public function __construct(string $url,string $text,string $title,string $css)
    {
        $this->url = $url;
        $this->text = $text;
        $this->title = $title;
        $this->css = $css;
    }

    /**
     * @return string
     */
    public function getTitle() : string
    {
        // TODO: Implement getTitle() method.
    }

    /**
     * @return string
     */
    public function getText() : string
    {
        // TODO: Implement getText() method.
    }

    /**
     * @return string
     */
    public function getUrl() : string
    {
        // TODO: Implement getUrl() method.
    }

    /**
     * @return string
     */
    public function getCss() : string
    {
        // TODO: Implement getCss() method.
    }
}