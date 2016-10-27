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

    /** @var  int */
    private $mediaFileId;

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

    public function __construct($id,
                                $mediaFileId,
                                $productName,
                                $shortDescription,
                                $typeOfProduct,
                                $grossPrice,
                                $vat,
                                $productGroupId,
                                $parentId)
    {
        $this->id = $id;
        $this->mediaFileId = $mediaFileId;
        $this->productName = $productName;
        $this->shortDescription = ( is_null($shortDescription) ? "" : $shortDescription);
        $this->typeOfProduct = $typeOfProduct;
        $this->grossPrice = ( is_null($grossPrice) ? 0.00 : $grossPrice );
        $this->vat = ( is_null($vat) ? 19 : $vat );
        $this->productGroupId = $productGroupId;
        $this->parentId = ( is_null( $parentId ) ? '' : $parentId );

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
     * @return int
     */
    public function getMediaFileId() :int
    {
        return $this->mediaFileId;
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

    public function getParentId()
    {
        return $this->parentId;
    }
}