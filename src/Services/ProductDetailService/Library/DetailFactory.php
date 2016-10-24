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

	/**
	 * @var MediaFileList
	 */
	private $mediaFileList;

	public function __construct( int $productId )
	{
		$this->productID = $productId;

		$this->repository = new ProductRepository( $productId );
		$product = $this->repository->getProductEntity();
		$this->mediaFileList=new MediaFileList();
		$this->generateMediaFileList();
		$price = new Price( $product->getGrossPrice(), $product->getVatValue() );

//        $this->product = new Product(
//            $price,
//            $mediaFileList,
//            $text,
//            $url,

		//      $Addons,
//              $Components,
		//
//
//
//        );

	}


	private function generateMediaFileList()
	{
		$mediaFileGenerator = $this->repository->getMediaFiles();

		foreach ( $mediaFileGenerator as $mediaEntity ) {
			$this->mediaFileList->addItem(new MediaFile(
				$mediaEntity->getId,
				$mediaEntity->getMime,
				$mediaEntity->getHeight,
				$mediaEntity->getWidth,
				$mediaEntity->getThumbHeight,
				$mediaEntity->getThumbWidth,
				$mediaEntity->getBigHeight,
				$mediaEntity->getThumbUrl,
				$mediaEntity->getBigWidth,
				$mediaEntity->getUrl,
				$mediaEntity->getBigUrl,
				$mediaEntity->getTitleTag,
				$mediaEntity->getAltTag
			));
	}
	}
	/**
	 * @return \Class152\PizzaMamamia\Services\ProductDetailService\Library\Product
	 */
	public function getProduct() : Product
	{


		return $this->product;
	}

}