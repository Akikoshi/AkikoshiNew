<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 24.10.2016
 * Time: 13:50
 */

namespace Class152\PizzaMamamia\Services\ShoppingCartService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantListInterface;

class ShoppingCartItemVariantList extends AbstractIterator implements ProductVariantListInterface
{
    /**
     * @return ProductVariantInterface
     */
    public function current() : ProductVariantInterface
    {
        return parent::current();
    }

    /**
     * @param null $key
     * @return ProductVariantInterface
     */
    public function getElement($key = null) : ProductVariantInterface
    {
        return parent::getElement($key);
    }
}