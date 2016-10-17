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
    /** @var  array */
    private $queryArray;
    
    /** @var  int */
    private $productId;
    
    /** @var  string */
    private $productName;
    
    /** @var  string */
    private $shortDescription;
    
    /** @var  int */
    private $mediaFileId;
    
    /** @var  string */
    private $typeOfProduct;
    
    /** @var  int */
    private $productGroupId;
    
    /** @var  float */
    private $grossPrice;
    
    /** @var  int */
    private $vat;
    
    /** @var  string */
    private $detailsUrl;
    
    //------------------------------------------------------------------------------------------------------------------
    
    public function __construct()
    {
        $this->databaseQuery();
        $this->databaseQuery();
        $this->setDetailsUrl();
    }

    private function databaseQuery()
    {
        "select pd.id, pd.mediaFileId, pd.name, ds.shortDescription, pd.type, pd.grossPrice, pd.vat, pd.productGroup Descriptions
        from Products as pd join Descriptions as ds on pd.id = ds.fk_products
        where pd.`type` like "%ontain%" || pd.`type` like "%ingl%"
        order by pd.type;";
    }

    /**
     * creates the Link to Details Site, is a hard Link can be refactored
     */
    private function setDetailsUrl()
    {
        $this->detailsUrl = "/productdetails/index/".$this->productId;
    }

    /**
     * @return int
     */
    public function getProductId() :int
    {
        return $this->productId;
    }

    /**
     * @return string
     */
    public function getProductName() :string
    {
        return $this->productName;
    }

    /**
     * @return string
     */
    public function getShortDescription() :string
    {
        return $this->shortDescription;
    }

    /**
     * @return int
     */
    public function getMediaFileId() :int
    {
        return $this->mediaFileId;
    }

    /**
     * @return string
     */
    public function getTypeOfProduct() :string
    {
        return $this->typeOfProduct;
    }

    /**
     * @return int
     */
    public function getProductGroupId() :int
    {
        return $this->productGroupId;
    }

    /**
     * @return float
     */
    public function getGrossPrice() :float
    {
        return $this->grossPrice;
    }

    /**
     * @return int
     */
    public function getVat() :int
    {
        return $this->vat;
    }

    /**
     * @return string
     */
    public function getDetailUrl() :string
    {
        return $this->detailsUrl;
    }
}