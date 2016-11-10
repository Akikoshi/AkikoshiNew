<?php
/**
 * Created by PhpStorm.
 * User: cbiedermann
 * Date: 19.09.2016
 * Time: 13:53
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;

use Class152\PizzaMamamia\Interfaces\MediaFileInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductAdditivesListInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductComponentsListInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductDetailInformationsInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantListInterface;
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


    public
    function getImages() : \IteratorIterator
    {
        return $this->mediaFileList;
    }


    function getId()
    {
        return $this->productID;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**TODO : testen getElement liefert erstes Element von mediafilelist
     * @return MediaFileInterface
     */
    public function getThumb()
    {
        return $this->mediaFileList->getElement(0);
    }

    /**
     * text type depends of current scope
     *
     * @return string
     */
    public function getDescription()
    {
       return $this->longDescription;
    }

    /**
     * @return bool
     */
    public function hasDescription()
    {
        return $this->hasDescription();
    }

    /** 
     * @return bool
     */
    public function isSingle()
    {
        // TODO: Implement isSingle() method.
    }

    /**
     * @return bool
     */
    public function hasVariants()
    {
        // TODO: Implement hasVariants() method.
    }

    /**
     * @return ProductVariantListInterface
     */
    public function getVariants()
    {
        // TODO: Implement getVariants() method.
    }

    /**
     * @return bool
     */
    public function hasImages()
    {
        return $this->hasImages();
    }

    /**
     * @return ProductComponentsListInterface
     */
    public function getComponents() : ProductComponentsListInterface
    {
        return $this->componentList;
    }

    /**
     * @return bool
     */
    public function hasComponents() : bool
    {
       return $this->hasComponents();
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

    /**
     * @return ProductVariantInterface
     */
    public function getDefaultVariant() : ProductVariantInterface
    {
        // TODO: Implement getDefaultVariant() method.
    }
}