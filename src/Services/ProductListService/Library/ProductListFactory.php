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
            new ProductItem('Pizza Jähnert', 'Die herzhaft belegte JägerschnitzelPizza', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );

        $this->productList->addItem(
            new ProductItem('Pizza Viete', 'Die geilste Pizza', 'holder.js/100x100/auto', '/productdetails/index', 1,11)
        );

        $this->productList->addItem(
            new ProductItem('Pizza Ranger', 'Die eitelste Pizza der Welt', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );

        $this->productList->addItem(
            new ProductItem('Pizza Rauch', 'Die Pizza die auf Klo gehört', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );





        $this->productList->addItem(
            new ProductItem('Pizza Carlo', 'Die geilste Pizza', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );

        $this->productList->addItem(
            new ProductItem('Pizza Mutti', 'Die eitelste Pizza der Welt', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );

        $this->productList->addItem(
            new ProductItem('Pizza Vati', 'Die Pizza die auf Klo gehört', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );



        $this->productList->addItem(
            new ProductItem('Pizza Frankenfeld', 'Die geilste Pizza', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );

        $this->productList->addItem(
            new ProductItem('Pizza K.', 'Die eitelste Pizza der Welt', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );

        $this->productList->addItem(
            new ProductItem('Pizza Mergel', 'Die Pizza die auf Klo gehört', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );




        $this->productList->addItem(
            new ProductItem('Pizza Detlef', 'Die geilste Pizza', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );

        $this->productList->addItem(
            new ProductItem('Pizza Rene', 'Die eitelste Pizza der Welt', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );

        $this->productList->addItem(
            new ProductItem('Pizza Dieter', 'Die Pizza die auf Klo gehört', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );





        $this->productList->addItem(
            new ProductItem('Pizza Mariatte', 'Die geilste Pizza', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );

        $this->productList->addItem(
            new ProductItem('Pizza Waltraut', 'Die eitelste Pizza der Welt', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );

        $this->productList->addItem(
            new ProductItem('Pizza Siegmar', 'Die Pizza die auf Klo gehört', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );



        $this->productList->addItem(
            new ProductItem('Pizza Heidi', 'Die geilste Pizza', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );

        $this->productList->addItem(
            new ProductItem('Pizza Mario', 'Die eitelste Pizza der Welt', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );

        $this->productList->addItem(
            new ProductItem('Pizza Käse', 'Die Pizza die auf Klo gehört', 'holder.js/100x100/auto', '/productdetails/index', 12.30)
        );





    }

    public function getProductList()
    {
        return $this->productList;
    }
}