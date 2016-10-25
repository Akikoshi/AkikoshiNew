<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 11:07
 */

namespace Class152\PizzaMamamia\Services\ProductListService\ListItems;


use Class152\PizzaMamamia\Interfaces\Product\ProductBasicInformationsInterface;
use Class152\PizzaMamamia\Services\ProductListService\values\MediaFile;

class ProductListItem implements ProductBasicInformationsInterface
{ /** @var  int */
    private $productId;

    /** @var  string */
    private $name;

    /** @var  string */
    private $description;

    /** @var  MediaFile */
    private $mediaFile;

    /** @var  string */
    private $productType;

    /** @var  bool */
    private $hasDescription = false;

    /** @var  bool */
    private $isSingle = false;

    /** @var  bool */
    private $hasVariants = false;

    /** @var  ProductVariantItem */
    private $productVariants;

    /**
     * ProductListItem constructor.
     * @param int $id
     * @param string $name
     * @param MediaFile $mediaFile
     * @param string $description
     * @param string $productType
     */
    public function __construct(int $id, string $name, MediaFile $mediaFile, string $description, string $productType)
    {
        $this->productId = $id;
        $this->name = $name;
        $this->mediaFile = $mediaFile;
        $this->description = $description;
        $this->productType = $productType;
        $this->checkIfDescriptionExists();
        $this->checkTypeOfProduct();
    }

    /**
     *  this function checks, if the Description Variable filled or not
     */
    private function checkIfDescriptionExists()
    {
        if($this->description !== null)
        {
            $this->hasDescription = true;
        }
    }

    /**
     *  this function checks if the ProductType Container or Single
     *  when the Product is a Container it has to initiate the
     *  product variants iteration
     */
    private function checkTypeOfProduct()
    {
        if($this->productType !== "Container")
        {
            $this->isSingle = true;
            $this->hasVariants = false;
        }
        else
        {
            $this->hasVariants = true;
        }
    }

    /** @return string */
    public function getName() : string
    {
        return $this->name;
    }

    /** @return string */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->productId;
    }

    /**
     * @return MediaFile
     */
    public function getThumb() : MediaFile
    {
        return $this->mediaFile;
    }

    /**
     * @return bool
     */
    public function hasDescription()
    {
        return $this->hasDescription;
    }

    /**
     * @return bool
     */
    public function isSingle()
    {
        return $this->isSingle;
    }

    /**
     * @return bool
     */
    public function hasVariants()
    {
        return $this->hasVariants;
    }

    /**
     * @return ProductVariantItem
     */
    public function getVariants()
    {
        return $this->productVariants;
    }

    /**
     * @param ProductVariantItem $productVariantItem
     */
    public function setVariants(ProductVariantItem $productVariantItem)
    {
        $this->productVariants = $productVariantItem;
    }
}