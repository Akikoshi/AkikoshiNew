<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 11:03
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Iterators;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Interfaces\Product\ProductBasicInformationsInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductListInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductListPaginatorInterface;
use Class152\PizzaMamamia\Services\ProductListService\ListItems\ProductListItem;

class ProductList extends AbstractIterator implements ProductListInterface
{
    private $productPaginator;

    public function __construct( array $productListItems ){
        parent::__construct($productListItems);
    }

    /**
     * @param ProductListItem $productListItem
     */
    public function addItem( ProductListItem $productListItem )
    {
        $this->iteratorArray[] = $productListItem;
    }

    /**
     * @return ProductBasicInformationsInterface
     */
    public function current() : ProductBasicInformationsInterface
    {
        return parent::current();
    }

    /**
     * @param null $key
     * @return ProductBasicInformationsInterface
     */
    public function getElement($key = null) : ProductBasicInformationsInterface
    {
        return parent::getElement($key);
    }

    /**
     * @return ProductListPaginatorInterface
     */
    public function getPaginator() : ProductListPaginatorInterface
    {
        return $this->productPaginator;
    }
}