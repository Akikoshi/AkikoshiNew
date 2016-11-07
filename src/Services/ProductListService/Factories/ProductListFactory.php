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
                $variants = new ProductVariantList(
                    [$this->loadVariants($elem->getProductId())]
                );
            } else {
                $variants = new ProductVariantList(
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
                $elem->getProductName(),
                new MediaFile
                (
                    $elem->getMediaFileId(),
                    $elem->getMime(),
                    $elem->getHeight(),
                    $elem->getWidth(),
                    $elem->getThumbHeight(),
                    $elem->getThumbWidth(),
                    $elem->getBigHeight(),
                    $elem->getBigWidth(),
                    $elem->getUrl(),
                    $elem->getThumbUrl(),
                    $elem->getBigUrl(),
                    $elem->getTitleTag(),
                    $elem->getAltTag()
                ),
                $elem->getShortDescription(),
                $elem->getTypeOfProduct(),
                $variants
            );
        }
    }
    
    private function isConfigurable($boolean)
    {
        return $boolean; // Todo: Ist hartverdrahtet muss noch aus der DatenBAnk kommen
    }
    
    public function loadProducts($id,
                                 $name,
                                 $mediaFileId,
                                 $shortDescription,
                                 $type,
                                 $productVariantsList)
    {
        $this->productListItem = new ProductListItem(
            $id,
            $name,
            $mediaFileId,
            $shortDescription,
            $type,
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
}