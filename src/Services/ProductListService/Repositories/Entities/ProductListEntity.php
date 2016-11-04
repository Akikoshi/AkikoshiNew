<?php
/**
 * Created by PhpStorm.
 * User: RauchR
 * Date: 17.10.2016
 * Time: 15:02
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Repositories\Entities;


class ProductListEntity
{
    /** @var int  */
    private $id;
    
    /** @var  string */
    private $productName;

    /** @var  string */
    private $shortDescription;

    /** @var  string */
    private $typeOfProduct;

    /** @var  int */
    private $productGroupId;

    /** @var  float */
    private $grossPrice;

    /** @var  int */
    private $vat;

    /** @var  string */
    private $detailsUrl;

    /** @var  int */
    private $parentId;

    /** @var  int */
    private $mediaFileId;
    
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

    public function __construct($id,
                                $productName,
                                $shortDescription,
                                $typeOfProduct,
                                $grossPrice,
                                $vat,
                                $productGroupId,
                                $parentId,
                                $mediaFileId,
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
                                $altTag
                )
    {
        $this->id = $id;
        $this->productName = $productName;
        $this->shortDescription = ( is_null($shortDescription) ? "" : $shortDescription);
        $this->typeOfProduct = ( is_null($typeOfProduct) ? "" : $typeOfProduct);
        $this->grossPrice = ( is_null($grossPrice) ? 0.00 : $grossPrice );
        $this->grossPrice;
        $this->vat = ( is_null($vat) ? 19 : $vat );
        $this->productGroupId = $productGroupId;
        $this->parentId = ( is_null( $parentId ) ? '' : $parentId );
        $this->mediaFileId = $mediaFileId;
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
    public function getProductId() :int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getProductName() :string
    {
        return $this->productName;
    }

    /**
     * @return string
     */
    public function getShortDescription() :string
    {
        return $this->shortDescription;
    }

    /**
     * @return string
     */
    public function getTypeOfProduct() :string
    {
        return $this->typeOfProduct;
    }

    /**
     * @return int
     */
    public function getProductGroupId() :int
    {
        return $this->productGroupId;
    }

    /**
     * @return float
     */
    public function getGrossPrice() :float
    {
        return $this->grossPrice;
    }

    /**
     * @return int
     */
    public function getVat() :int
    {
        return $this->vat;
    }

    /**
     * @return string
     */
    public function getDetailUrl() :string
    {
        return $this->detailsUrl;
    }

    /**
     * @return int
     */
    public function getParentId() :int
    {
        return $this->parentId;
    }

    /**
     * @return int
     */
    public function getMediaFileId() :int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDetailsUrl() :string
    {
        return $this->detailsUrl;
    }

    /**
     * @return string
     */
    public function getMime() :string
    {
        return $this->mime;
    }

    /**
     * @return int
     */
    public function getHeight() :int
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getWidth() :int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getThumbHeight() :int
    {
        return $this->thumbHeight;
    }

    /**
     * @return int
     */
    public function getThumbWidth() :int
    {
        return $this->thumbWidth;
    }

    /**
     * @return int
     */
    public function getBigHeight() :int
    {
        return $this->bigHeight;
    }

    /**
     * @return int
     */
    public function getBigWidth() :int
    {
        return $this->bigWidth;
    }

    /**
     * @return string
     */
    public function getUrl() :string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getThumbUrl() :string
    {
        return $this->thumbUrl;
    }

    /**
     * @return string
     */
    public function getBigUrl() :string
    {
        return $this->bigUrl;
    }

    /**
     * @return string
     */
    public function getTitleTag() :string
    {
        return $this->titleTag;
    }

    /**
     * @return string
     */
    public function getAltTag() :string
    {
        return $this->altTag;
    }
}