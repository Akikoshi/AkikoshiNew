<?php
/**
 * Created by PhpStorm.
 * User: cbiedermann
 * Date: 21.10.2016
 * Time: 08:52
 */

namespace Class152\PizzaMamamia\Interfaces\Product;


use Class152\PizzaMamamia\Interfaces\LinkInterface;
use Class152\PizzaMamamia\Interfaces\PriceInterface;
use Class152\PizzaMamamia\Services\ProductListService\values\Link;
use Class152\PizzaMamamia\Services\ProductListService\values\Price;

/**
 * Interface ProductVariantsIteratorInterface
 *
 * @package Class152\PizzaMamamia\Interfaces\Product
 */
interface ProductVariantInterface
{
    /**
     * @return string
     */
    public function getId() : string;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @return Price
     */
    public function getPrice() : Price;

    /**
     * @return Link
     */
    public function getProductDetailUrl() : Link;

    /**
     * @return Link
     */
    public function getAddToShoppingCartUrl() : Link;

    /**
     * @return Link
     */
    public function getConfigurationUrl() : Link;

    /**
     * @return bool
     */
    public function isConfigurable() : bool;
}