<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 13:57
 */

namespace Class152\PizzaMamamia\Services\ProductListService;


use Class152\PizzaMamamia\Services\ProductListService\Library\ProductListFactory;

class ProductListService
{
    public function getProductList()
    {
        $productFactory = new ProductListFactory();
        return $productFactory->getProductList();
    }
}