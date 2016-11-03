<?php
/**
 * Created by PhpStorm.
 * User: Jens Johannes, Peter Frankenfeldt
 * Date: 03.11.2016
 * Time: 12:00
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;

use Class152\PizzaMamamia\Interfaces\MediaFileInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductAdditivesListInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductComponentsListInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductDetailInformationsInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantsIteratorInterface;
use Class152\PizzaMamamia\Library\Price;


class Product implements ProductDetailInformationsInterface
{
    

    /** @var integer */
    private $productID;

    /**
     * @var MediaFileList
     */
    private $mediaFileList;

    /**
     * @var ComponentList
     */
    private $componentList;


    /**
     * @var MediaFileInterface
     */
    private $mediaInformation;

    /**
     * @var \Class152\PizzaMamamia\Services\ProductDetailService\Library\Price
     */
    private $price;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $internalName;

    /**
     * @var string
     */
    private $longDescription;

    /**
     * @var int
     */
    private $parentId;

    /**
     * @var bool
     */
    private $hasDescription;

    /**
     * @var bool
     */
    private $hasImages;

    /**
     * @var bool
     */
    private $hasComponents;

    
    
    public function __construct(
        $productID,
        $name,
        $internalName,
        $longDescription,
        $parentId,
        $type,
        $price,
        $mediaFileList,
        $componentList
    ) {
        $this->productID = $productID;
        $this->name = $name;
        $this->internalName = $internalName;
        $this->longDescription = $longDescription;
        $this->parentId = $parentId;
        $this->type = $type;
        $this->price = $price;
        $this->mediaFileList = $mediaFileList;
        $this->componentList = $componentList;

        $this->hasDescription = true;
        if($this->longDescription==null) 
        {
            $this->hasDescription = false;
        }
        
        $this->hasImages = true;
        if(  $this->mediaFileList->getElement(0)==null)
        {
            $this->hasImages = false;
        }

        $this->hasComponents = true;
        if(  $this->componentList->getElement(0)==null)
        {
            $this->hasComponents = false;
        }

    }

    /**
     * @return string
     */
    public function getId() : string
    {
        // TODO: Implement getId() method.
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        // TODO: Implement getName() method.
    }

    /**
     * @return MediaFileInterface
     */
    public function getThumb() : MediaFileInterface
    {
        // TODO: Implement getThumb() method.
    }

    /**
     * text type depends of current scope
     *
     * @return string
     */
    public function getDescription() : string
    {
        // TODO: Implement getDescription() method.
    }

    /**
     * @return bool
     */
    public function hasDescription() : bool
    {
        // TODO: Implement hasDescription() method.
    }

    /**
     * @return bool
     */
    public function isSingle() : bool
    {
        // TODO: Implement isSingle() method.
    }

    /**
     * @return bool
     */
    public function hasVariants() : bool
    {
        // TODO: Implement hasVariants() method.
    }

    /**
     * @return ProductVariantsIteratorInterface
     */
    public function getVariants() : ProductVariantsIteratorInterface
    {
        // TODO: Implement getVariants() method.
    }

    public function getDefaultVariant() : ProductVariantInterface
    {
        // TODO: Implement getDefaultVariant() method.
    }

    /**
     * @return \IteratorIterator
     */
    public function getImages() : \IteratorIterator
    {
        // TODO: Implement getImages() method.
    }

    /**
     * @return bool
     */
    public function hasImages()
    {
        // TODO: Implement hasImages() method.
    }

    /**
     * @return ProductComponentsListInterface
     */
    public function getComponents() : ProductComponentsListInterface
    {
        // TODO: Implement getComponents() method.
    }

    /**
     * @return bool
     */
    public function hasComponents() : bool
    {
        // TODO: Implement hasComponents() method.
    }

    /**
     * @return ProductAdditivesListInterface
     */
    public function getAdditives() : ProductAdditivesListInterface
    {
        // TODO: Implement getAdditives() method.
    }

    /**
     * @return bool
     */
    public function hasAdditives() : bool
    {
        // TODO: Implement hasAdditives() method.
    }

    /**
     * @return ProductAdditivesListInterface
     */
    public function getAllergics() : ProductAdditivesListInterface
    {
        // TODO: Implement getAllergics() method.
    }

    /**
     * @return bool
     */
    public function hasAllergics() : bool
    {
        // TODO: Implement hasAllergics() method.
    }
}