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
    public function __construct();
    
    public function getProductId() :int;

    public function getProductName() :string;

    public function getShortDescription() :string;

    public function getMediaFileId() :int;

    public function getTypeOfProduct() :string;

    public function getProductGroupId() :int;

    public function getGrossPrice() :float;
    
    public function getVat() :int;
    
    public function getDetailUrl() :string;
}