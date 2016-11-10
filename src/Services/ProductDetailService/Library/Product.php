<?php
/**
 * Created by PhpStorm.
 * User: Jens Johannes, Peter Frankenfeldt
 * Date: 03.11.2016
 * Time: 12:00
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;

use Class152\PizzaMamamia\Interfaces\MediaFileInterface;
use Class152\PizzaMamamia\Interfaces\MediaFileListInterface;
use Class152\PizzaMamamia\Interfaces\PriceInterface;
use Class152\PizzaMamamia\Services\ProductDetailService\Library\Price;
use Class152\PizzaMamamia\Interfaces\Product\ProductAdditivesListInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductComponentsListInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductDetailInformationsInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantListInterface;


class Product implements ProductDetailInformationsInterface
{

    /** @var integer */
    private $productID;

    /**
     * @var MediaFileList
     */
    private $mediaFileList;

    /**
     * @var ProductComponentsList
     */
    private $componentList;

    /**
     * @var Price
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

    /**
     * @var bool
     */
    private $isSingle;


    public function __construct(
        string $productID,
        string $name,
        string $internalName,
        string $longDescription,
        string $parentId,
        string $type,
        Price $price,
        MediaFileListInterface $mediaFileList,
        ProductComponentsListInterface $componentList
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
        if( null == $this->longDescription)
        {
            $this->hasDescription = false;
        }
        
        $this->hasImages = true;
        if( null == $this->mediaFileList->getElement(0))
        {
            $this->hasImages = false;
        }

        $this->hasComponents = true;
        if( null == $this->componentList->getElement(0))
        {
            $this->hasComponents = false;
        }

        if( isset( $this->componentList->getElement(1) ) )
        {
            $this->isSingle= true;
        }
        
    }
    
    /**
     * @return MediaFileList
     */
    public function getImages() : MediaFileList
    {
        return $this->mediaFileList;
    }
    
    public function getId() : string
    {
        return $this->productID;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**TODO : testen getElement liefert erstes Element von mediafilelist
     * @return MediaFileInterface
     */
    public function getThumb() : MediaFileInterface
    {
        return $this->mediaFileList->getElement(0);
    }

    /**
     * text type depends of current scope
     *
     * @return string
     */
    public function getDescription() : string
    {
       return $this->longDescription;
    }

    /**
     * @return bool
     */
    public function hasDescription() : bool
    {
        return $this->hasDescription();
    }

    /** 
     * @return bool
     */
    public function isSingle() : bool
    {
        $this->isSingle;
    }

    /**
     * @return bool
     */
    public function hasVariants() : bool
    {
        return false;
    }

    /**
     * @return ProductVariantListInterface
     */
    public function getVariants() : ProductVariantListInterface
    {
        return new ProductVariantList([]);
    }

    /**
     * @return bool
     */
    public function hasImages() : bool
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
            return new ProductVariantItemMock();
    }
}