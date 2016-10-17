<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 15:27
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


class ProductListFactory
{
    private $productList;
    
    private $productId;
    
    private $productName;
    
    private $shortDescription;
    
    private $mediaFileId;
    
    private $mediaFile;
    
    private $typeOfProduct;
    
    private $productGroupId;
    
    private $grossPrice;
    
    private $vat;
    
    private $detailUrl;

    public function __construct(ProductListEntity $productListEntity)
    {
        $this->productId = $productListEntity->getProductId();
        $this->productName = $productListEntity->getProductName();
        $this->shortDescription = $productListEntity->getShortDescription();
        $this->mediaFileId = $productListEntity->getMediaFileId();
        $this->typeOfProduct = $productListEntity->getTypeOfProduct();
        $this->productGroupId = $productListEntity->getProductGroupId();
        $this->grossPrice = $productListEntity->getGrossPrice();
        $this->vat = $productListEntity->getVat();
        $this->detailUrl = $productListEntity->getDetailUrl();
        $this->craeteNewProductList();
    }
    
    private function createMediaFile()
    {
        $this->mediaFile = new MediaFile($this->mediaFileId);
    }

    private function craeteNewProductList()
    {
        $this->productList = new ProductList();
        $this->productList->addItem(
            new ProductItem($this->productName, $this->shortDescription, $this->mediaFile, $this->detailUrl, $this->grossPrice)
        );
    }
    
    public function getProductList()
    {
        return $this->productList;
    }
}