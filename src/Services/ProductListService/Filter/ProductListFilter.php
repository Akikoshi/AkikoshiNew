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

    /** @var int */
    private $itemsPerPage = 12;

    /** @var int */
    private $currentPage = 1;

    /** @var  int */
    private $itemAmount;

    public function __construct(string $productGroupId = '', int $currentPage, int $itemsPerPage)
    {
        $this->productGroupId = $productGroupId;

        if( ! empty( $productGroupId ) )
        {
            $this->isFiteredByGroupId = true;
        }

        if (!empty($currentPage)) {
            $this->currentPage = $currentPage;
        }

        if (!empty($itemsPerPage)) {
            $this->itemsPerPage = $itemsPerPage;
        }
    }

    /**
     *
     */
    public function sortByPrice()
    {
        $this->isSortByPrice = true;
    }

    /**
     * @return bool
     */
    public function isSortByPrice() : bool
    {
        return $this->isSortByPrice;
    }

    /**
     * @return bool
     */
    public function isFilteredByGroupId() : bool
    {
        return $this->isFiteredByGroupId;
    }

    /**
     * @return bool
     */
    public function getGroupId() : bool
    {
        return $this->productGroupId;
    }

    /**
     * @return int
     */
    public function getItemsPerPage() : int
    {
        return $this->itemsPerPage;
    }

    /**
     * @return int
     */
    public function getCurrentPage() : int
    {
        return $this->currentPage;
    }

    /**
     * @return int
     */
    public function getItemsAmount() : int
    {
        return $this->itemAmount;
    }

    /**
     * @param int $itemAmount
     */
    public function setItemAmount(int $itemAmount)
    {
        $this->itemAmount = $itemAmount;
    }
}