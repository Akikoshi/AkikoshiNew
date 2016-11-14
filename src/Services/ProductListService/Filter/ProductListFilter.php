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
    private $isSortByPrice = false;

    /** @var  bool */
    private $isFiteredByGroupId = false;

    public function __construct( string $productGroupId = '' )
    {
        $this->productGroupId = $productGroupId;

        if( ! empty( $productGroupId ) )
        {
            $this->isFiteredByGroupId = true;
        }

    }

    /**
     *
     */
    public function sortByPrice()
    {
        $this->isSortByPrice = true;
    }

    /** @return string */
    public function isSortByPrice()
    {
        return $this->isSortByPrice;
    }

    /** @return bool */
    public function isFilteredByGroupId()
    {
        return $this->isFiteredByGroupId;
    }

    /** @return bool */
    public function getGroupId()
    {
        return $this->productGroupId;
    }
}