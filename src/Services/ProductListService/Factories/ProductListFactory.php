<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 11:20
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Factories;


use Class152\PizzaMamamia\AbstractClasses\Services\ProductListService\Library\ProductListEntity;
use Class152\PizzaMamamia\Services\ProductListService\Filter\ProductListFilter;
use Class152\PizzaMamamia\Services\ProductListService\Iterators\ProductList;
use Class152\PizzaMamamia\Services\ProductListService\Iterators\ProductVariantList;
use Class152\PizzaMamamia\Services\ProductListService\Library\ProductListRepository;
use Class152\PizzaMamamia\Services\ProductListService\ListItems\ProductListItem;
use Class152\PizzaMamamia\Services\ProductListService\ListItems\ProductVariantItem;
use Class152\PizzaMamamia\Services\ProductListService\values\MediaFile;
use Class152\PizzaMamamia\Services\ProductListService\values\Price;

class ProductListFactory
{
    /** @var ProductListRepository */
    private $repository;

    /** @var ProductList */
    private $productList;

    /** @var array */
    private $productListItems = [];

    public function __construct(ProductListFilter $productListFilter)
    {
        $this->repository = new ProductListRepository($productListFilter);
        $this->iterateProductList();
    }

    private function iterateProductList()
    {
        $entity = $this->repository->getProductListItems();
        /** @var ProductListEntity $elem */
        foreach ($entity as $elem) {

            $type = $elem->getTypeOfProduct();
            if ('container' == $type) {
                $variants = $this->loadVariants($elem->getProductId());
            } else {
                $variants = new ProductVariantList(
                    [new ProductVariantItem(
                        $elem->getProductId(),
                        $elem->getProductName(),
                        $elem->getTypeOfProduct(),
                        $this->loadPrice(
                            $elem->getGrossPrice(),
                            $elem->getVat()),
                        $this->loadLinks()
                    )]
                );
            }

            $this->loadProducts(
                $elem->getProductId(),
                $this->loadMediaFile( $elem->getMediaFileId() ),
                $elem->getProductName(),
                $elem->getShortDescription(),
                $elem->getTypeOfProduct(),
                $elem->getGrossPrice(),
                $elem->getVat(),
                $elem->getProductGroupId()
            );
        }
    }
    
    private function loadLinks()
    
    private function loadMediaFile( int $mediaFileId )
    {
        return new MediaFile();
    }
    
    private function loadPrice(float $grossPrice, int $vat)
    {
        return new Price($grossPrice, $vat);
    }

    public function loadProducts($id, $mediaFileId, $name, $shortDescription, $type, $grossPrice, $vat, $productGroupId)
    {
        $this->productListItem = new ProductListItem(
            $id,
            $mediaFileId,
            $name,
            $shortDescription,
            $type, $grossPrice,
            $vat,
            $productGroupId);
    }

    public function loadVariants(int $productId)
    {
        $entity = $this->repository->getProductVariantArray($productId);

        $variants = [];
        
        foreach ($entity as $elem) {
            $variants[] =
                new ProductVariantItem(
                    $elem->getProductId(),
                    $elem->getMediaFileId(),
                    $elem->getProductName(),
                    $elem->getShortDescription(),
                    $elem->getTypeOfProduct(),
                    $elem->getGrossPrice(),
                    $elem->getVat(),
                    $elem->getProductGroupId()
                );
        }
        
        return new ProductVariantList( $variants );
    }

    public function composeProductList()
    {
        $this->productList = new ProductList($this->productListItems);
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