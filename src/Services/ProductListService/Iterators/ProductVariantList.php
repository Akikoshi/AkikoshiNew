<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 11:03
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Iterators;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Interfaces\Product\ProductVariantListInterface;
use Class152\PizzaMamamia\Services\ProductListService\ListItems\ProductVariantItem;

class ProductVariantList extends AbstractIterator implements ProductVariantListInterface
{
    /**
     * @return ProductVariantItem
     */
    public function current() : ProductVariantItem
    {
        return parent::current();
    }
}