<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 07.11.2016
 * Time: 11:51
 */
namespace Class152\PizzaMamamia\Interfaces\Product;

interface ProductListFilterInterface
{
    public function __construct( string $productGroupId = '');

    /**
     *
     */
    public function sortByPrice();

    /** @return string */
    public function isSortByPrice();

    /** @return bool */
    public function isFilteredByGroupId();

    /** @return bool */
    public function getGroupId();
}