<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 15:27
 */

namespace Class152\PizzaMamamia\Services\ProductService\Library;


class ProductFactory
{
    private $productItem;

    public function __construct()
    {
        $this->productItem = new ProductItemList();
        $this->productItem->addItem(
            new ProductItem('Pizza Jähnert', 'Die herzhaft belegte JägerschnitzelPizza', 'holder.js/100x100/auto', '/productdetails/index?typ1=1')
        );

        $this->productItem->addItem(
            new ProductItem('Pizza Viete', 'Die geilste Pizza', 'holder.js/100x100/auto', '/productdetails/index?typ1=2')
        );

        $this->productItem->addItem(
            new ProductItem('Pizza Ranger', 'Die eitelste Pizza der Welt', 'holder.js/100x100/auto', '/productdetails/index?typ1=3')
        );

        $this->productItem->addItem(
            new ProductItem('Pizza Rauch', 'Die Pizza die auf Klo gehört', 'holder.js/100x100/auto', '/productdetails/index?typ1=4')
        );
    }

    public function getProductItem()
    {
        return $this->productItem;
    }
}