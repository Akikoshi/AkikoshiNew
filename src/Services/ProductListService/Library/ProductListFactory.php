<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 15:27
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


class ProductListFactory
{
    private $productList;

    public function __construct()
    {
        $this->productList = new ProductList();
        $this->productList->addItem(
            new ProductItem('Pizza Jähnert', 'Die herzhaft belegte JägerschnitzelPizza', 'holder.js/100x100/auto', '/productdetails/index')
        );

        $this->productList->addItem(
            new ProductItem('Pizza Viete', 'Die geilste Pizza', 'holder.js/100x100/auto', '/productdetails/index')
        );

        $this->productList->addItem(
            new ProductItem('Pizza Ranger', 'Die eitelste Pizza der Welt', 'holder.js/100x100/auto', '/productdetails/index')
        );

        $this->productList->addItem(
            new ProductItem('Pizza Rauch', 'Die Pizza die auf Klo gehört', 'holder.js/100x100/auto', '/productdetails/index')
        );
    }

    public function getProductList()
    {
        return $this->productList;
    }
}