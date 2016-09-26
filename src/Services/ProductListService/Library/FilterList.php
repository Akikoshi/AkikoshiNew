<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 14.09.2016
 * Time: 10:58
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Services\ProductListService\Exceptions\FilterListNeedsFilterItemsException;

final class FilterList extends AbstractIterator
{
    /**
     * ProductList constructor.
     * @param array $array
     * @throws \Class152\PizzaMamamia\Services\ProductListService\Exceptions\FilterListNeedsFilterItemsException
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
                throw new FilterListNeedsFilterItemsException(
                    'constructor of FilterList can only use FilterItem objects'
                );
            }
        }
        $this->iteratorArray = $array;
    }

    /**
     * adds a given ProductItem
     *
     * @param \Class152\PizzaMamamia\Services\ProductListService\Library\FilterItem $filterItem
     */
    public function addItem(FilterItem $filterItem)
    {
        $this->iteratorArray[] = $filterItem;
    }

    /**
     * overloads the current method for restricted type of return value
     *
     * @return \Class152\PizzaMamamia\Services\ProductListService\Library\FilterItem
     */
    public function current() : FilterItem
    {
        return parent::current();
    }
}