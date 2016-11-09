<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 03.11.2016
 * Time: 13:21
 */

namespace Class152\PizzaMamamia\Interfaces\Product;


use Class152\PizzaMamamia\Interfaces\AbstractIteratorInterface;

interface ProductVariantListInterface extends AbstractIteratorInterface
{
    /**
     * @return ProductVariantInterface
     */
    public function current() : ProductVariantInterface;

    /**
     * @param null|string|int $key
     * @return ProductVariantInterface
     */
    public function getElement($key = null) : ProductVariantInterface;
}