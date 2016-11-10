<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 11:08
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;



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

    /** @var Link */
    private $productDetailUrl;

    /** @var  LinkInterface */
    private $shoppingCartUrl;

    /** @var  Link */
    private $configuratorUrl;

    /** @var  Link */
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
     * @return Price
     */
    public function getPrice() : Price
    {
        return $this->price;
    }

    /**
     * @return Link
     */
    public function getProductDetailUrl() : Link
    {
        return $this->productDetailUrl;
    }

    /**
     * @return LinkInterface
     */
    public function getAddToShoppingCartUrl() : Link
    {
        return $this->shoppingCartUrl;
    }

    /**
     * @return LinkInterface
     */
    public function getConfigurationUrl() : Link
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