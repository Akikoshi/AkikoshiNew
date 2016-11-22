<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 10.11.2016
 * Time: 11:49
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;


use Class152\PizzaMamamia\Interfaces\Product\ProductVariantInterface;
use Class152\PizzaMamamia\Services\ProductListService\values\Link;
use Class152\PizzaMamamia\Services\ProductListService\values\Price;

class ProductVariantItemMock implements ProductVariantInterface
{

    /**
     * @return string
     */
    public function getId() : string
    {
       return ("");
    }

    /**
     * @return string
     */
    public function getName() : string
    {
       return"";
    }

    /**
     * @return Price
     */
    public function getPrice() : Price
    {
        return new Price(0,0);
    }

    /**
     * @return Link
     */
    public function getProductDetailUrl() : Link
    {
        new Link("","");
    }

    /**
     * @return Link
     */
    public function getAddToShoppingCartUrl() : Link
    {
        new Link("","");
    }

    /**
     * @return Link
     */
    public function getConfigurationUrl() : Link
    {
        new Link("","");
    }

    /**
     * @return bool
     */
    public function isConfigurable() : bool
    {
       return false;
    }
}