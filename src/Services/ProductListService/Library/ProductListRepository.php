<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 17.10.2016
 * Time: 11:27
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


use Class152\PizzaMamamia\Interfaces\ProductListRepositroryInterface;

class ProductListRepository implements ProductListRepositroryInterface
{
    private $queryArray;
    
    private $productId;
    
    private $productName;
    
    private $shortDescription;
    
    private $mediaFileId;
    
    private $typeOfProduct;
    
    private $productGroupId;
    
    private $grossPrice;
    
    private $vat;
    
    private $detailsUrl;
    
    public function __construct()
    {
        $this->databaseQuery();
        $this->
    }

    private function databaseQuery()
    {
        
        
        "select pd.id, pd.mediaFileId, pd.name, ds.shortDescription, pd.type, pd.grossPrice, pd.vat, pd.productGroup Descriptions
        from Products as pd join Descriptions as ds on pd.id = ds.fk_products
        where pd.`type` like "%ontain%" || pd.`type` like "%ingl%"
        order by pd.type;";
    }
    
    private function setDetailsUrl()
    {
        $this->detailsUrl = "/productdetails/index/".$this->productId;
    }
    
    public function getProductId() :int
    {
        return $this->productId;
    }

    public function getProductName() :string
    {
        return $this->productName;
    }

    public function getShortDescription() :string
    {
        return $this->shortDescription;
    }

    public function getMediaFileId() :int
    {
        return $this->mediaFileId;
    }

    public function getTypeOfProduct() :string
    {
        return $this->typeOfProduct;
    }

    public function getProductGroupId() :int
    {
        return $this->productGroupId;
    }

    public function getGrossPrice() :float
    {
        return $this->grossPrice;
    }

    public function getVat() :int
    {
        return $this->vat;
    }

    public function getDetailUrl() :string
    {
        return $this->detailsUrl;
    }
}