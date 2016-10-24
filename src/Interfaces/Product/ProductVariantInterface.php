<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 24.10.2016
 * Time: 13:52
 */

namespace Class152\PizzaMamamia\Interfaces\Product;


use Class152\PizzaMamamia\Interfaces\LinkInterface;
use Class152\PizzaMamamia\Interfaces\PriceInterface;

interface ProductVariantInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return PriceInterface
     */
    public function getPrice();

    /**
     * @return LinkInterface
     */
    public function getProductDetailUrl();

    /**
     * @return LinkInterface
     */
    public function getAddToShoppingCartUrl();

    /**
     * @return LinkInterface
     */
    public function getConfigurationUrl();

    /**
     * @return bool
     */
    public function isConfigurable();
}