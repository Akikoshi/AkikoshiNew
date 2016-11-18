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
    public function __construct( string $productGroupId = '', int $currentPage, int $ietmsPerPage);

    /**
     *
     */
    public function sortByPrice();

    /** @return string */
    public function isSortByPrice() : bool ;

    /** @return bool */
    public function isFilteredByGroupId() : bool ;

    /** @return bool */
    public function getGroupId() : bool ;
    
    /** @return int */
    public function getItemsPerPage() : int ;
    
    /** @return int */
    public function getCurrentPage() : int ;
    
    /** @param int */
    public function setItemAmount(int $itemAmount) ;
    
    /** @return int */
    public function getItemsAmount() : int ;
}