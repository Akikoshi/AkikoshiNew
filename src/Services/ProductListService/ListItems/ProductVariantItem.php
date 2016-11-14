<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 11:08
 */

namespace Class152\PizzaMamamia\Services\ProductListService\ListItems;



use Class152\PizzaMamamia\Interfaces\LinkInterface;
use Class152\PizzaMamamia\Interfaces\PriceInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantInterface;
use Class152\PizzaMamamia\Services\ProductListService\values\Link;
use Class152\PizzaMamamia\Services\ProductListService\values\Price;

class ProductVariantItem implements ProductVariantInterface
{
    /** @var int  */
    private $parentId;

    /** @var  string */
    private $productVariantId;

    /** @var  string */
    private $variantName;

    /** @var PriceInterface*/
    private $price;

    /** @var LinkInterface */
    private $productDetailUrl;

    /** @var  LinkInterface */
    private $shoppingCartUrl;

    /** @var  LinkInterface */
    private $configuratorUrl;

    /** @var  LinkInterface */
    private $isConfigurable;

    /**
     * ProductVariantsIterator constructor.
     * @param $parentId
     * @param $productVariantId
     * @param $variantName
     * @param PriceInterface $price
     * @param LinkInterface $productDetailUrl
     * @param LinkInterface $shoppingCartUrl
     * @param LinkInterface $configuratorUrl
     * @param bool $isConfigurable
     */
    public function __construct(
        $parentId,
        $productVariantId,
        $variantName,
        PriceInterface $price,
        LinkInterface $productDetailUrl,
        LinkInterface $shoppingCartUrl,
        LinkInterface $configuratorUrl,
        bool $isConfigurable
    )
    {
        $this->parentId = $parentId;
        $this->productVariantId = $productVariantId;
        $this->variantName = $variantName;
        $this->price = $price;
        $this->productDetailUrl = $productDetailUrl;
        $this->shoppingCartUrl = $shoppingCartUrl;
        $this->configuratorUrl = $configuratorUrl;
        $this->isConfigurable = $isConfigurable;
    }


    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->productVariantId;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->variantName;
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
        return $this->shoppingCartUrl;
    }

    /**
     * @return LinkInterface
     */
    public function getConfigurationUrl() : LinkInterface
    {
        return $this->configuratorUrl;
    }

    /**
     * @return bool
     */
    public function isConfigurable() : bool
    {
        return $this->isConfigurable;
    }
}