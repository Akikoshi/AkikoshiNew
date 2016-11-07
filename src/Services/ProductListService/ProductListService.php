<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 13:57
 */

namespace Class152\PizzaMamamia\Services\ProductListService;


use Class152\PizzaMamamia\Services\ProductListService\Filter\ProductListFilter;
use Class152\PizzaMamamia\Services\ProductListService\Iterators\ProductList;
use Class152\PizzaMamamia\Services\ProductListService\Library\FilterListFactory;
use Class152\PizzaMamamia\Services\ProductListService\Factories\ProductListFactory;
use Class152\PizzaMamamia\Services\ProductListService\Library\SortListFactory;

class ProductListService
{
    public function getProductList() :ProductList
    {
        $productListFilter = new ProductListFilter(null, false, false);
        $productFactory = new ProductListFactory($productListFilter);
        return $productFactory->getInstance();
    }
}