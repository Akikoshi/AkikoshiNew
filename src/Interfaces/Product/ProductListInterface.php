<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 11:04
 */

namespace Class152\PizzaMamamia\Interfaces\Product;


use Class152\PizzaMamamia\Interfaces\AbstractIteratorInterface;

interface ProductListInterface extends AbstractIteratorInterface
{
    /**
     * @return ProductBasicInformationsInterface
     */
    public function current() : ProductBasicInformationsInterface;

    /**
     * @return ProductListPaginatorInterface
     */
    public function getPaginator() : ProductListPaginatorInterface;
}