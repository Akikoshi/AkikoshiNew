<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 03.11.2016
 * Time: 13:21
 */

namespace Class152\PizzaMamamia\Interfaces\Product;


interface ProductVariantListInterface
{
    /**
     * @return ProductVariantInterface
     */
    public function current() : ProductVariantInterface;
}