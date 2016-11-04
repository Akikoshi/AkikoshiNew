<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 11:03
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Iterators;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantListInterface;

class ProductVariantList extends AbstractIterator implements ProductVariantListInterface
{
    /**
     * @return ProductVariantInterface
     */
    public function current() : ProductVariantInterface
    {
        return parent::current();
    }
}