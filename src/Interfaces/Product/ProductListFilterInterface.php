<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 13:02
 */

namespace Class152\PizzaMamamia\Interfaces\Product;


interface ProductListFilterInterface
{
    public function isSortByPrice(); //Todo: mit Herr Biedermann absprechen
    
    public function isFilterByGroupId();
    
    public function getGroupId();
}