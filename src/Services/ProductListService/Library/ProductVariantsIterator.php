<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 09:03
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


use Class152\PizzaMamamia\Interfaces\LinkInterface;
use Class152\PizzaMamamia\Interfaces\PriceInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantsIteratorInterface;

class ProductVariantsIterator implements ProductVariantsIteratorInterface
{
    /**
     * Todo: Implement the private functions
     */

    /** @var string  */
    private $parentId;
    
    /** @var  string */
    private $productVariantId;
    
    /** @var  string */
    private $variantName;
    
    /** @var Price*/
    private $price;
    
    /** @var Link */
    private $productDetailUrl;

    /** @var  Link */
    private $shoppingCartUrl;

    /** @var  Link */
    private $configuratorUrl;

    /** @var  Link */
    private $isConfigurable;
    
    public function __construct(string $parentId)
    {
        $this->parentId = $parentId;
    }
    
    

    /**
     * @return string
     */
    public function getId()
    {
        return $this->productVariantId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->variantName;
    }

    /**
     * @return PriceInterface
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return LinkInterface
     */
    public function getProductDetailUrl()
    {
        return $this->productDetailUrl;
    }

    /**
     * @return LinkInterface
     */
    public function getAddToShoppingCartUrl()
    {
        return $this->shoppingCartUrl;
    }

    /**
     * @return LinkInterface
     */
    public function getConfigurationUrl()
    {
        return $this->configuratorUrl;
    }

    /**
     * @return bool
     */
    public function isConfigurable()
    {
        return $this->isConfigurable;
    }
}