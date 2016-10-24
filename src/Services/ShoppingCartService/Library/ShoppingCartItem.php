<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 24.10.2016
 * Time: 10:56
 */

namespace Class152\PizzaMamamia\Services\ShoppingCartService\Library;


use Class152\PizzaMamamia\Interfaces\LinkInterface;
use Class152\PizzaMamamia\Interfaces\MediaFileInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantsIteratorInterface;
use Class152\PizzaMamamia\Interfaces\ShoppingCart\ShoppingCartItemInterface;

class ShoppingCartItem implements ShoppingCartItemInterface
{
    /** @var string */
    private $id;

    /** @var  string */
    private $name;

    /** @var  string */
    private $thumb;

    /** @var  string */
    private $description;

    /** @var  bool */
    private $hasDescription = false;

    /** @var  bool */
    private $isSingle = true;

    /** @var  bool */
    private $hasVariants = false;

    /** @var  ProductVariantsIteratorInterface */
    private $variants;

    /** @var  int */
    private $amount;

    /** @var  int */
    private $maxAmount;

    /** @var  bool */
    private $hasMaxAmount;

    /** @var bool  */
    private $isReducedByCampaign;

    /** @var LinkInterface  */
    private $removeItemUrl;

    /** @var LinkInterface  */
    private $increaseItemUrl;

    /** @var  bool */
    private $isIncreaseable = true;

    /** @var  bool */
    private $isDecreaseable = true;

    /** @var LinkInterface  */
    private $decreaseItemUrl;

    /**
     * ShoppingCartItem constructor.
     * @param $id
     * @param $name
     * @param $thumb
     * @param string $description
     * @param ShoppingCartItemVariantList $variants
     * @param int $amount
     * @param int $maxAmount
     * @param $isReducedByCampaign
     * @param ShoppingCartLink $removeItemUrl
     * @param ShoppingCartLink $increaseItemUrl
     * @param ShoppingCartLink $decreaseItemUrl
     */
    public function __construct(
        $id,
        $name,
        $thumb,
        string $description,
        ShoppingCartItemVariantList $variants,
        int $amount,
        int $maxAmount,
        $isReducedByCampaign,
        ShoppingCartLink $removeItemUrl,
        ShoppingCartLink $increaseItemUrl,
        ShoppingCartLink $decreaseItemUrl
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->thumb = $thumb;
        $this->description = $description;
        $this->variants = $variants;
        $this->amount = $amount;
        $this->maxAmount = $maxAmount;
        $this->isReducedByCampaign = $isReducedByCampaign;
        $this->removeItemUrl = $removeItemUrl;
        $this->increaseItemUrl = $increaseItemUrl;
        $this->decreaseItemUrl = $decreaseItemUrl;

        if( $this->maxAmount > 0 ){ $this->hasMaxAmount = true; }
        if( $this->maxAmount > 0 && $this->amount >= $this->maxAmount ) { $this->isIncreaseable = false; }
        if( $this->amount <= 1 ){ $this->isDecreaseable = false; }
        if( ! empty( $description ) ){ $this->hasDescription = true; }
        if( 1 > count($variants) ){ $this->isSingle = false; $this->hasVariants = true; }
    }


    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return MediaFileInterface
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * text type depends of current scope
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * @return ProductVariantsIteratorInterface
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * @return int
     */
    public function getAmount() : int
    {
       return $this->amount;
    }

    /**
     * @return int
     */
    public function getMaxAmount() : int
    {
        return $this->maxAmount;
    }

    /**
     * @return bool
     */
    public function hasMaxAmount() : bool
    {
        return $this->hasMaxAmount;
    }

    /**
     * @return bool
     */
    public function isReducedByCampaign() : bool
    {
        return $this->isReducedByCampaign;
    }

    /**
     * @return \Class152\PizzaMamamia\Interfaces\LinkInterface
     */
    public function getRemoveItemUrl() : LinkInterface
    {
        return $this->removeItemUrl;
    }

    /**
     * @return \Class152\PizzaMamamia\Interfaces\LinkInterface
     */
    public function getIncreaseItemUrl() : LinkInterface
    {
        return $this->increaseItemUrl;
    }

    /**
     * @return bool
     */
    public function isIncreaseable() : bool
    {
        return $this->isIncreaseable;
    }

    /**
     * @return \Class152\PizzaMamamia\Interfaces\LinkInterface
     */
    public function getDecreaseItemUrl() : LinkInterface
    {
        return $this->decreaseItemUrl;
    }

    /**
     * @return bool
     */
    public function isDecreaseable() : bool
    {
        return $this->isDecreaseable;
    }
}