<?php
/**
 * Created by PhpStorm.
 * User: RauchR
 * Date: 17.10.2016
 * Time: 15:02
 */

namespace Class152\PizzaMamamia\AbstractClasses\Services\ProductListService\Library;


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

    /** @var  int */
    private $productId;

    /** @var  string */
    private $detailsUrl;

    public function __construct(int $id, 
                                int $mediaFileId, 
                                string $productName, 
                                string $shortDescription, 
                                string $typeOfProduct, 
                                float $grossPrice, 
                                int $vat, 
                                int $productGroupId)
    {
        $this->id = $id;
        $this->mediaFileId = $mediaFileId;
        $this->productName = $productName;
        $this->shortDescription = $shortDescription;
        $this->typeOfProduct = $typeOfProduct;
        $this->grossPrice = $grossPrice;
        $this->vat = $vat;
        $this->productGroupId = $productGroupId;
    }

    /**
     * @return int
     */
    public function getProductId() :int
    {
        return $this->productId;
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
}