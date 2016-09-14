<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 14:00
 */

namespace Class152\PizzaMamamia\Services\ProductService\Library;

use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Services\ProductService\Exceptions\ProductItemListNeedsProductItemsException;
use Class152\PizzaMamamia\Services\ProductService\Interfaces\ProductItemListInterface;

final class ProductItemList extends AbstractIterator
{
    /**
     * ProductItemList constructor.
     * @param array $array
     * @throws \Class152\PizzaMamamia\Services\ProductService\Exceptions\ProductItemListNeedsProductItemsException
     */
    public function __construct(array $array = null)
    {
        if (is_null($array)) {
            return;
        }

        foreach (array_keys($array) as $keys) {
            if (
                !is_object($array[$keys])
                || !is_a($array[$keys], 'MenuItem')
            ) {
                throw new ProductItemListNeedsProductItemsException(
                    'constructor of ProductItemList can only use ProductItem objects'
                );
            }
        }

        $this->iteratorArray = $array;
    }

    /** 
     * adds a given ProductItem 
     *
     * @param \Class152\PizzaMamamia\Services\ProductService\Library\ProductItem $productItem
     */
    public function addItem(ProductItem $productItem)
    {
        $this->iteratorArray[] = $productItem;
    }

    /**
     * overloads the current method for restricted type of return value
     *
     * @return \Class152\PizzaMamamia\Services\ProductService\Library\ProductItem
     */
    public function current() : ProductItem
    {
        return parent::current();
    }
}