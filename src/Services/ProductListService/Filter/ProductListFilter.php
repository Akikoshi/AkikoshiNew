<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 11:01
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Filter;


use Class152\PizzaMamamia\Interfaces\Product\ProductListFilterInterface;

class ProductListFilter implements ProductListFilterInterface
{
    /** @var  string */
    private $productGroupId;

    /** @var  bool */
    private $isSortByPrice;

    /** @var  bool */
    private $isFiteredByGroupId;

    public function __construct($productGroupId, $isSortByPrice, $isFilteredByGroupId)
    {
        //Todo: ist noch Hartverdrahtet, muss noch erarbeitet werden
        $this->productGroupId = $productGroupId;
        $this->isSortByPrice = $isSortByPrice;
        $this->isFiteredByGroupId = $isFilteredByGroupId;
    }

    /** @return string */
    public function isSortByPrice()
    {
        return $this->isSortByPrice;
    }

    /** @return bool */
    public function isFilterByGroupId()
    {
        return $this->isFiteredByGroupId;
    }

    /** @return bool */
    public function getGroupId()
    {
        return $this->productGroupId;
    }
}