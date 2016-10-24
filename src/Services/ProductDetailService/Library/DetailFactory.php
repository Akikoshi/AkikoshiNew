<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 17.10.2016
 * Time: 11:06
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;

use Class152\PizzaMamamia\Services\ProductDetailService\Library\Price;
use Class152\PizzaMamamia\Services\ProductDetailService\Library\Product;
use Class152\PizzaMamamia\Services\ProductDetailService\Repository\ProductRepository;


class DetailFactory
{
    /** @var ProductRepository */
    private $repository;

    /** @var integer */
    private $productID;

    /** @var Product */
    private $product;

    public function __construct( int $productId )
    {
        $this->productID = $productId;

        $this->repository = new ProductRepository( $productId );
        $product = $this->repository->getProductById( $productId );
        $mediaFile = $this->repository->getMediaFileById( $productId );

        $price = new Price( $product->getGrossPrice(), $product->getVatValue() );
//        $this->product = new Product(
//            $price,
//            $mediaFile,
//            $text,
//            $url,

        //      $Addons,
//              $Components,
        //
//
//
//        );
        
    }

    /**
     * @return \Class152\PizzaMamamia\Services\ProductDetailService\Library\Product
     */
    public function getProduct() : Product
    {


        return $this->product;
    }

}