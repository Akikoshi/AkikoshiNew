<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 11:03
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Iterators;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Interfaces\Product\ProductListInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductListPaginatorInterface;
use Class152\PizzaMamamia\Services\ProductListService\ListItems\ProductListItem;

class ProductList extends AbstractIterator implements ProductListInterface
{
    private $productPaginator;

    public function __construct(){ parent::__construct([]); }

    /**
     * @param ProductListItem $productListItem
     */
    public function addItem( ProductListItem $productListItem )
    {
        $this->iteratorArray[] = $productListItem;
    }

    /**
     * @return ProductListPaginatorInterface
     */
    public function getPaginator() : ProductListPaginatorInterface
    {
        return $this->productPaginator;
    }
}

// ALTER CODE AUS DER LIBRARY CLASS


//final class ProductList extends AbstractIterator
//{
//    /**
//     * ProductList constructor.
//     * @param array $array
//     * @throws \Class152\PizzaMamamia\Services\ProductListService\Exceptions\ProductListNeedsProductItemsException
//     */
//    public function __construct(array $array = null)
//    {
//        if (is_null($array)) {
//            return;
//        }
//
//        foreach (array_keys($array) as $keys) {
//            if (
//                !is_object($array[$keys])
//                || !is_a($array[$keys], 'MenuItem')
//            ) {
//                throw new ProductListNeedsProductItemsException(
//                    'constructor of ProductList can only use ProductItem objects'
//                );
//            }
//        }
//
//        $this->iteratorArray = $array;
//    }
//
//    /**
//     * adds a given ProductItem
//     *
//     * @param \Class152\PizzaMamamia\Services\ProductListService\Library\ProductItem $productItem
//     */
//    public function addItem(ProductItem $productItem)
//    {
//        $this->iteratorArray[] = $productItem;
//    }
//
//    /**
//     * overloads the current method for restricted type of return value
//     *
//     * @return \Class152\PizzaMamamia\Services\ProductListService\Library\ProductItem
//     */
//    public function current() : ProductItem
//    {
//        return parent::current();
//    }