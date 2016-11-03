<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 24.10.2016
 * Time: 14:08
 */

namespace Class152\PizzaMamamia\Services\ShoppingCartService\Library;


use Class152\PizzaMamamia\Interfaces\LinkInterface;

class ShoppingCartLink implements LinkInterface
{
    /** @var string */
    private $url;
    /** @var string */
    private $text;
    /** @var string */
    private $title;
    /** @var string */
    private $css;

    /**
     * ShoppingCartLink constructor.
     * @param string $css
     * @param string $url
     * @param string $text
     * @param string $title
     */
    public function __construct( $url, $text, $title = 'a', $css = 'b' )
    {
        $this->css = $css;
        $this->url = $url;
        $this->text = $text;
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getCss() : string 
    {
        return $this->css;
    }

    /**
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
}