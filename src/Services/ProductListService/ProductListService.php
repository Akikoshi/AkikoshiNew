<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 13:57
 */

namespace Class152\PizzaMamamia\Services\ProductListService;


use Class152\PizzaMamamia\Services\ProductListService\Library\FilterListFactory;
use Class152\PizzaMamamia\Services\ProductListService\Library\ProductListFactory;
use Class152\PizzaMamamia\Services\ProductListService\Library\ProductListPaginator;
use Class152\PizzaMamamia\Services\ProductListService\Library\ProductListRepository;
use Class152\PizzaMamamia\Services\ProductListService\Library\SortListFactory;

class ProductListService
{
    public function getProductList()
    {
        $productListRepository = new ProductList();
        $productFactory = new ProductListFactory($productListRepository);
        return $productFactory->getProductList();
    }

    public function getFilterList()
    {
        $filterListFactory = new FilterListFactory();
        return $filterListFactory->getFilterList();
    }
    
    public function getSortList()
    {
        $sortListFactory = new SortListFactory();
        return $sortListFactory->getSortList();
    }
}