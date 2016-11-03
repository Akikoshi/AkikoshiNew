<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 25.10.2016
 * Time: 11:17
 */

namespace Class152\PizzaMamamia\Services\ShoppingCartService\Library;


use Class152\PizzaMamamia\Interfaces\LinkInterface;
use Class152\PizzaMamamia\Interfaces\PriceInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantInterface;

class ShoppingCartItemVariant implements ProductVariantInterface
{
    /** @var  string */
    private $id;
    /** @var  string */
    private $name;

    /** @var  PriceInterface */
    private $price;

    /** @var  LinkInterface */
    private $productDetailUrl;

    /** @var  LinkInterface */
    private $addToShoppingCartUrl;

    /** @var  LinkInterface */
    private $configurationUrl;

    /** @var  bool */
    private $isConfigurable;

    /**
     * ShoppingCartItemVariant constructor.
     * @param string $id
     * @param string $name
     * @param ShoppingCartPrice $price
     * @param LinkInterface $productDetailUrl
     * @param LinkInterface $addToShoppingCartUrl
     * @param LinkInterface $configurationUrl
     * @param bool $isConfigurable
     */
    public function __construct(
        $id,
        $name,
        $price,
        LinkInterface $productDetailUrl,
        LinkInterface $addToShoppingCartUrl,
        LinkInterface $configurationUrl,
        $isConfigurable)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->productDetailUrl = $productDetailUrl;
        $this->addToShoppingCartUrl = $addToShoppingCartUrl;
        $this->configurationUrl = $configurationUrl;
        $this->isConfigurable = $isConfigurable;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return PriceInterface
     */
    public function getPrice() : PriceInterface
    {
        return $this->price;
    }

    /**
     * @return LinkInterface
     */
    public function getProductDetailUrl() : LinkInterface
    {
        return $this->productDetailUrl;
    }

    /**
     * @return LinkInterface
     */
    public function getAddToShoppingCartUrl() : LinkInterface
    {
        return $this->addToShoppingCartUrl;
    }

    /**
     * @return LinkInterface
     */
    public function getConfigurationUrl() : LinkInterface
    {
        return $this->configurationUrl;
    }

    /**
     * @return bool
     */
    public function isConfigurable() : bool
    {
        return $this->isConfigurable;
    }
}