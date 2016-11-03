<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 14.09.2016
 * Time: 11:42
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


class SortItem
{
    //Todo: add to Filter
    /** @var  float */
    private $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    /** @return float */
    public function getPrice() : float
    {
        return $this->price;
    }
}