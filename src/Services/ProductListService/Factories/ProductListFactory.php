<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 11:20
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Factories;


use Class152\PizzaMamamia\Services\ProductListService\Iterators\ProductList;
use Class152\PizzaMamamia\Services\ProductListService\Library\ProductListRepository;

class ProductListFactory
{
    /** @var ProductListRepository */
    private $repository;
    
    /** @var ProductList */
    private $productList;

    public function __construct( ProductListFilter $productListFilter )
    {
        $this->repository = new ProductListRepository( $productListFilter );
    }
    
    public function loadProducts()
    {
        
    }
    
    public function loadVariants()
    {
        
    }
    
    public function composeProductList()
    {
        
    }

    /**
     * @return ProductList
     */
    public function getInstance()
    {
        return $this->productList;
    }


// ALTER CODE AUS DER FACTORY; WIRD HIER NOCHMALS HINTERLEGT
//    private $productList;
//
//    private $repository;
//
//
//
//    public function __construct()
//    {
//        $this->repository = new ProductListRepository();
//        $this->productList = new ProductList();
//    }
//
//    private function createMediaFile(int $mediaFileId)
//    {
//        $this->mediaFile = new MediaFile($mediaFileId);
//    }
//
//    private function craeteNewProductList()
//    {
//        $this->productList = new ProductList();
//        $this->productList->addItem(
//            new ProductItem($this->productName, $this->shortDescription, $this->mediaFile, $this->detailUrl, $this->grossPrice)
//        );
//    }
//
//    public function getProductList()
//    {
//        return $this->productList;
//    }

//      ALTER CODE AUS DER VARIANTSFACTORY Todo: muss noch implementiert werden  
//
//    /** @var  ProductListVariantsRepository */
//    private $repository;
//
//    /** @var  ProductList */
//    private $productList;
//
//    public function __construct(int $parentId)
//    {
//        $this->createProductVariants($parentId);
//        $this->repository = new ProductListVariantsRepository( $parentId );
//    }
//
//    private function createProductVariants(int $parentId)
//    {
//        $this->productList = new ProductList();
//        $product = $this->repository->getProductById();
//
//        $productVarantsIterator = new ProductVariantIterator();
//
//
//        $this->productList->addItem(
//            new ProductVariantsIterator
//            (
//                $product->getParentId(),
//                $product->getProductVariantId(),
//                $variantName,
//                PriceInterface $price,
//                LinkInterface $productDetailUrl,
//                LinkInterface $shoppingCartUrl,
//                LinkInterface $configuratorUrl,
//                LinkInterface $isConfigurable
//            );
//        );
    }
    
}