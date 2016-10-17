<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 15:27
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


use Class152\PizzaMamamia\AbstractClasses\Services\ProductListService\Library\ProductListEntity;
use Class152\PizzaMamamia\Services\ProductService\Library\Product\Product;

class ProductListFactory
{
    private $productList;
    
    /** @var  int */
    private $productId;
    
    /** @var  string */
    private $productName;
    
    /** @var  string */
    private $shortDescription;
    
    /** @var  int */
    private $mediaFileId;
    
    /** @var  MediaFile */
    private $mediaFile;
    
    /** @var  string */
    private $typeOfProduct;
    
    /** @var  int */
    private $productGroupId;
    
    /** @var  float */
    private $grossPrice;
    
    /** @var  int */
    private $vat;
    
    /** @var  string */
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
        $this->createMediaFile($this->mediaFileId);
        $this->craeteNewProductList();
    }
    
    private function createMediaFile(int $mediaFileId)
    {
        $this->mediaFile = new MediaFile($mediaFileId);
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