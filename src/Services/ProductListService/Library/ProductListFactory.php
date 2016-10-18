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

    private $repository;
    


    public function __construct()
    {
        $this->repository = new ProductListRepository();
        $this->productList = new ProductList();
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