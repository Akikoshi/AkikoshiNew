<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 07.11.2016
 * Time: 08:12
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;

use Class152\PizzaMamamia\Interfaces\MediaFileInterface;

class MediaFile implements MediaFileInterface
{
    /**
     * Hold the Id of the MediaFile
     *
     * @var int
     */
    private $id;

    /**
     * Hold the mime-type of the images.
     * All images must have the same mime-type.
     *
     * @var string
     */
    private $mime;

    /**
     * Hold the height in pixel of the standard image version.
     *
     * @var int
     */
    private $height;

    /**
     * Hold the width in pixel of the standard image version.
     *
     * @var int
     */
    private $width;

    /**
     * Hold the height in pixel of the thumb image version.
     *
     * @var int
     */
    private $thumbHeight;

    /**
     * Hold the width in pixel of the thumb image version.
     *
     * @var int
     */
    private $thumbWidth;

    /**
     * Hold the height in pixel of the large image version.
     *
     * @var int
     */
    private $bigHeight;

    /**
     * Hold the width in pixel of the large image version.
     *
     * @var int
     */
    private $bigWidth;

    /**
     * Hold url of the normal image version.
     *
     * @var LinkInterface
     */
    private $url;

    /**
     * Hold url of the thumb image version.
     *
     * @var LinkInterface
     */
    private $thumbUrl;

    /**
     * Hold url of the large image version.
     *
     * @var LinkInterface
     */
    private $bigUrl;

    /**
     * Hold the title-text for this MediaFile.
     *
     * @var string
     */
    private $titleTag;

    /**
     * Hold the alt-text for this MediaFile.
     *
     * @var string
     */
    private $altTag;

    /**
     * MediaFile constructor.
     * @param int $id
     * @param string $mime
     * @param int $height
     * @param int $width
     * @param int $thumbHeight
     * @param int $thumbWidth
     * @param int $bigHeight
     * @param int $bigWidth
     * @param LinkInterface $url
     * @param LinkInterface $thumbUrl
     * @param LinkInterface $bigUrl
     * @param string $titleTag
     * @param string $altTag
     */
    public function __construct(
        int $id,
        string $mime,
        int $height,
        int $width,
        int $thumbHeight,
        int $thumbWidth,
        int $bigHeight,
        int $bigWidth,
        LinkInterface $url,
        LinkInterface $thumbUrl,
        LinkInterface $bigUrl,
        string $titleTag,
        string $altTag)
    {
        $this->id = $id;
        $this->mime = $mime;
        $this->height = $height;
        $this->width = $width;
        $this->thumbHeight = $thumbHeight;
        $this->thumbWidth = $thumbWidth;
        $this->bigHeight = $bigHeight;
        $this->bigWidth = $bigWidth;
        $this->url = $url;
        $this->thumbUrl = $thumbUrl;
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
     * @return LinkInterface
     */
    public function getUrl() : LinkInterface
    {
        return $this->url;
    }

    /**
     * @return LinkInterface
     */
    public function getThumbUrl() : LinkInterface
    {
        return $this->thumbUrl;
    }

    /**
     * @return LinkInterface
     */
    public function getBigUrl() : LinkInterface
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