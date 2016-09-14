<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 14.09.2016
 * Time: 11:42
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;

use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Services\ProductListService\Exceptions\SortListNeedsSortItemsException;

final class SortList extends AbstractIterator
{
    /**
     * ProductList constructor.
     * @param array $array
     * @throws \Class152\PizzaMamamia\Services\ProductListService\Exceptions\SortListNeedsSortItemsException
     */
    public function __construct(array $array = null)
    {
        if (is_null($array)) {
            return;
        }

        foreach (array_keys($array) as $keys)
        {
            if (
                !is_object($array[$keys])
                || !is_a($array[$keys], 'MenuItem')
            ) {
                throw new SortListNeedsSortItemsException(
                    'constructor of SortList can only use SortItem objects'
                );
            }
        }
        $this->iteratorArray = $array;
    }

    /**
     * adds a given ProductItem
     *
     * @param \Class152\PizzaMamamia\Services\ProductListService\Library\SortItem $sortItem
     */
    public function addItem(SortItem $sortItem)
    {
        $this->iteratorArray[] = $sortItem;
    }

    /**
     * overloads the current method for restricted type of return value
     *
     * @return \Class152\PizzaMamamia\Services\ProductListService\Library\SortItem
     */
    public function current() : SortItem
    {
        return parent::current();
    }
}