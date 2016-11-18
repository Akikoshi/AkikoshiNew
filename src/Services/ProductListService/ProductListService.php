<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 13:57
 */

namespace Class152\PizzaMamamia\Services\ProductListService;


use Class152\PizzaMamamia\Services\ProductListService\Filter\ProductListFilter;
use Class152\PizzaMamamia\Services\ProductListService\Iterators\ProductList;
use Class152\PizzaMamamia\Services\ProductListService\Factories\ProductListFactory;


class ProductListService
{

    /**
     * @param string $productGroupId
     * @param int $currentPage
     * @param int $itemsPerPage
     * @return ProductListFilter
     */
    public function getProductListFilter( string $productGroupId,int $currentPage, int $itemsPerPage) : ProductListFilter
    {
        return new ProductListFilter($productGroupId, $currentPage, $itemsPerPage);
    }

    /**
     * @param ProductListFilter $productListFilter
     * @return Iterators\Paginator
     */
    public function getPagination(ProductListFilter $productListFilter)
    {
        $pagination = new ProductListFactory($productListFilter);
        return $pagination->getPaginator();
    }

    /**
     * @param ProductListFilter $productListFilter
     * @return ProductList
     */
    public function getProductList(ProductListFilter $productListFilter)
    {
        $productFactory = new ProductListFactory( $productListFilter );
        return $productFactory->getInstance();
    }
}