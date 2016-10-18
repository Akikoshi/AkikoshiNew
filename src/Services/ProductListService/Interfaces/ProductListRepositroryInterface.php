<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 17.10.2016
 * Time: 11:54
 */

namespace Class152\PizzaMamamia\Interfaces;


interface ProductListRepositroryInterface
{
    public function getContainerAndSingleProducts() :array ;

    public function getChildProducts(int $parentId) :array;
}