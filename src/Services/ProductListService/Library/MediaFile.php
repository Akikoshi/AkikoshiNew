<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 17.10.2016
 * Time: 11:20
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


use Class152\PizzaMamamia\Interfaces\MediaFileInterface;

class MediaFile implements MediaFileInterface
{
    private $mediaFileId;

    public function __construct(int $mediaFileId)
    {
        $this->mediaFileId = $mediaFileId;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        // TODO: Implement getId() method.
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        // TODO: Implement setId() method.
    }

    /**
     * @return string
     */
    public function getMime() : string
    {
        // TODO: Implement getMime() method.
    }

    /**
     * @param string $mime
     */
    public function setMime($mime)
    {
        // TODO: Implement setMime() method.
    }

    /**
     * @return int
     */
    public function getHeight() : int
    {
        // TODO: Implement getHeight() method.
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        // TODO: Implement setHeight() method.
    }

    /**
     * @return int
     */
    public function getWidth() : int
    {
        // TODO: Implement getWidth() method.
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        // TODO: Implement setWidth() method.
    }

    /**
     * @return int
     */
    public function getThumbHeight() : int
    {
        // TODO: Implement getThumbHeight() method.
    }

    /**
     * @param int $thumbHeight
     */
    public function setThumbHeight($thumbHeight)
    {
        // TODO: Implement setThumbHeight() method.
    }

    /**
     * @return int
     */
    public function getThumbWidth() : int
    {
        // TODO: Implement getThumbWidth() method.
    }

    /**
     * @param int $thumbWidth
     */
    public function setThumbWidth($thumbWidth)
    {
        // TODO: Implement setThumbWidth() method.
    }

    /**
     * @return int
     */
    public function getBigHeight() : int
    {
        // TODO: Implement getBigHeight() method.
    }

    /**
     * @param int $bigHeight
     */
    public function setBigHeight($bigHeight)
    {
        // TODO: Implement setBigHeight() method.
    }

    /**
     * @return int
     */
    public function getBigWidth() : int
    {
        // TODO: Implement getBigWidth() method.
    }

    /**
     * @param int $bigWidth
     */
    public function setBigWidth($bigWidth)
    {
        // TODO: Implement setBigWidth() method.
    }

    /**
     * @return string
     */
    public function getUrl() : string
    {
        // TODO: Implement getUrl() method.
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        // TODO: Implement setUrl() method.
    }

    /**
     * @return string
     */
    public function getThumbUrl() : string
    {
        // TODO: Implement getThumbUrl() method.
    }

    /**
     * @param string $thumbUrl
     */
    public function setThumbUrl($thumbUrl)
    {
        // TODO: Implement setThumbUrl() method.
    }

    /**
     * @return string
     */
    public function getBigUrl() : string
    {
        // TODO: Implement getBigUrl() method.
    }

    /**
     * @param string $bigUrl
     */
    public function setBigUrl($bigUrl)
    {
        // TODO: Implement setBigUrl() method.
    }

    /**
     * @return string
     */
    public function getTitleTag() : string
    {
        // TODO: Implement getTitleTag() method.
    }

    /**
     * @param string $titleTag
     */
    public function setTitleTag($titleTag)
    {
        // TODO: Implement setTitleTag() method.
    }

    /**
     * @return string
     */
    public function getAltTag() : string
    {
        // TODO: Implement getAltTag() method.
    }

    /**
     * @param string $altTag
     */
    public function setAltTag($altTag)
    {
        // TODO: Implement setAltTag() method.
    }
}