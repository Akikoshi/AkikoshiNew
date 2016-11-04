<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 17.10.2016
 * Time: 13:12
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;

use Class152\PizzaMamamia\Interfaces\MediaFileInterface;

class MediaFile implements MediaFileInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $mime;

    /**
     * @var int
     */
    private $height;

    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $thumbHeight;

    /**
     * @var int
     */
    private $thumbWidth;

    /**
     * @var int
     */
    private $bigHeight;

    /**
     * @var int
     */
    private $bigWidth;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $thumbUrl;

    /**
     * @var string
     */
    private $bigUrl;

    /**
     * @var string
     */
    private $titleTag;

    /**
     * @var string
     */
    private $altTag;


    public function __construct(
        $id,
        $mime,
        $height,
        $width,
        $thumbHeight,
        $thumbWidth,
        $bigHeight,
        $bigWidth,
        $url,
        $thumbUrl,
        $bigUrl,
        $titleTag,
        $altTag)
    {
        $this->id = $id;
        $this->mime = $mime;
        $this->height = $height;
        $this->width = $width;
        $this->thumbHeight = $thumbHeight;
        $this->thumbWidth = $thumbWidth;
        $this->bigHeight = $bigHeight;
        $this->thumbUrl = $bigWidth;
        $this->bigWidth = $url;
        $this->url = $thumbUrl;
        $this->bigUrl = $bigUrl;
        $this->titleTag = $titleTag;
        $this->altTag = $altTag;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getMime() : string
    {
        return $this->mime;
    }

    /**
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getThumbHeight() : int
    {
        return $this->thumbHeight;
    }

    /**
     * @return int
     */
    public function getThumbWidth() : int
    {
        return $this->thumbWidth;
    }

    /**
     * @return int
     */
    public function getBigHeight() : int
    {
        return $this->bigHeight;
    }

    /**
     * @return int
     */
    public function getBigWidth() : int
    {
        return $this->bigWidth;
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
    public function getThumbUrl() : string
    {
        return $this->thumbUrl;
    }

    /**
     * @return string
     */
    public function getBigUrl() : string
    {
        return $this->bigUrl;
    }

    /**
     * @return string
     */
    public function getTitleTag() : string
    {
        return $this->titleTag;
    }

    /**
     * @return string
     */
    public function getAltTag() : string
    {
        return $this->altTag;
    }
}