<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 11:20
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Factories;


use \Class152\PizzaMamamia\Services\ProductListService\Repositories\Entities\ProductListEntity;
use Class152\PizzaMamamia\Services\ProductListService\Filter\ProductListFilter;
use Class152\PizzaMamamia\Services\ProductListService\Iterators\ProductList;
use Class152\PizzaMamamia\Services\ProductListService\Iterators\ProductVariantList;
use Class152\PizzaMamamia\Services\ProductListService\ListItems\ProductListItem;
use Class152\PizzaMamamia\Services\ProductListService\ListItems\ProductVariantItem;
use Class152\PizzaMamamia\Services\ProductListService\Repositories\ProductListRepository;
use Class152\PizzaMamamia\Services\ProductListService\values\Link;
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
                $variants[] = $this->loadVariants($elem->getProductId());
            } else {
                $variants[] = new ProductVariantList(
                    [new ProductVariantItem(
                        $elem->getProductId(),
                        $elem->getProductName(),
                        $elem->getTypeOfProduct(),
                        new Price( $elem->getGrossPrice(), $elem->getVat() ),
                        new Link("/productdetails/index/" . $elem->getProductId(),"Details"),//Todo: hartverdrahtet
                        new Link("/shoppingcart/index/" . $elem->getProductId(),"Warenkorb"),
                        new Link("/configurator/index/" . $elem->getProductId(),"konfigurieren"),
                        $this->isConfigurable(true) // Todo: Ist hartverdrahtet muss noch aus der DatenBAnk kommen                    
                    )]
                );
            }

            $this->loadProducts(
                $elem->getProductId(),
                new MediaFile( $elem->getMediaFileId() ),
                $elem->getProductName(),
                $elem->getShortDescription(),
                $elem->getTypeOfProduct(),
                $elem->getGrossPrice(),
                $elem->getVat(),
                $elem->getProductGroupId(),
                $variants
            );
        }
    }
    
    private function isConfigurable($boolean)
    {
        return $boolean; // Todo: Ist hartverdrahtet muss noch aus der DatenBAnk kommen
    }
    
    public function loadProducts($id,
                                 $mediaFileId,
                                 $name,
                                 $shortDescription,
                                 $type, $grossPrice,
                                 $vat, $productGroupId,
                                 $productVariantsList)
    {
        $this->productListItem = new ProductListItem(
            $id,
            $name,
            $mediaFileId,
            $shortDescription,
            $type,
            $grossPrice,
            $vat,
            $productGroupId,
            $productVariantsList);
    }

    public function loadVariants(int $productId)
    {
        $entity = $this->repository->getProductVariantArray($productId);

        $variants = [];
        /** @var ProductListEntity $elem */
        foreach ($entity as $elem) {
            $variants[] =
                new ProductVariantItem(
                    $elem->getProductId(),
                    $elem->getProductName(),
                    $elem->getTypeOfProduct(),
                    new Price( $elem->getGrossPrice(), $elem->getVat() ),
                    new Link("/productdetails/index/" . $elem->getProductId(),"Details"),//Todo: hartverdrahtet
                    new Link("/shoppingcart/index/" . $elem->getProductId(),"Warenkorb"),
                    new Link("/configurator/index/" . $elem->getProductId(),"konfigurieren"),
                    $this->isConfigurable(true) // Todo: Ist hartverdrahtet muss noch aus der DatenBAnk kommen
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