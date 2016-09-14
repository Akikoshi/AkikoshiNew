<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 13:57
 */

namespace Class152\PizzaMamamia\Services\ProductService;


use Class152\PizzaMamamia\Services\ProductService\Library\ProductFactory;

class ProductService
{
    public function getProductItem()
    {
        $productFactory = new ProductFactory();
        return $productFactory->getProductItem();
    }
}