<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 24.10.2016
 * Time: 13:50
 */

namespace Class152\PizzaMamamia\Services\ShoppingCartService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Interfaces\LinkInterface;
use Class152\PizzaMamamia\Interfaces\PriceInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantsIteratorInterface;

class ShoppingCartItemVariantList extends AbstractIterator implements ProductVariantsIteratorInterface
{
    /**
     * @return ProductVariantInterface
     */
    public function current() : ProductVariantInterface
    {
        return parent::current();
    }
}