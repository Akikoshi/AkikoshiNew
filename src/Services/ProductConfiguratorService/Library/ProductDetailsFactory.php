<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 16.09.2016
 * Time: 10:12
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Library;


use Class152\PizzaMamamia\Services\ProductConfiguratorService\Exceptions\NoMediaFileFoundByIdException;
use Class152\PizzaMamamia\Services\ProductConfiguratorService\Exceptions\NoProductFoundByIdException;
use Class152\PizzaMamamia\Services\ProductConfiguratorService\Repositories\Entities\MediaEntity;
use Class152\PizzaMamamia\Services\ProductConfiguratorService\Repositories\Entities\ProductEntity;
use Class152\PizzaMamamia\Services\ProductConfiguratorService\Repositories\MediaFileRepository;
use Class152\PizzaMamamia\Services\ProductConfiguratorService\Repositories\ProductRepository;

class ProductDetailsFactory
{

	/**
	 * @var ProductItem
	 * Hold all information about the product.
	 */
	private $productDetails;

	/**
	 * @var int
	 * Hold the id of the product.
	 */
	private $productId;
	
	/** @var MediaFile */
	private $mediaItem;

	/**
	 * ProductInfoFactory constructor.
	 * @param int $productId
	 */
	public function __construct( int $productId )
	{
		$this->productId = $productId;
		$this->genProductFromDB();
	}

	/**
	 * @return ProductItem
	 */
	public function getProductDetail() : ProductItem
	{
		return $this->productDetails;
	}

	/**
	 * @return ProductItem
	 * @throws NoMediaFileFoundByIdException
	 * @throws NoProductFoundByIdException
	 */
	private function genProductFromDB() : ProductItem
	{
		$productRepository = new ProductRepository();
		
		/** @var ProductEntity $productEntity */
		$productEntity = $productRepository->getProductById($this->productId);
		if (is_null($productEntity))
		{
			throw new NoProductFoundByIdException('No Product found for ID: '. $this->productId);
		}
		$this->mediaItem = $this->genMediaFileFromDB( $productEntity->getMediaFileId() );

		$this->productDetails = new ProductItem(
			$this->productId,
			$productEntity->getName(),
			$productEntity->getNameExtension(),
			$productEntity->getDescription(),
			$this->mediaItem,
			$productEntity->getInternalName(),
			$productEntity->getGrossPrice(),
			$productEntity->getVat()
		);
	}
	
	/**
	 * @param int $mediaFileId
	 * @return MediaFile
	 * @throws NoMediaFileFoundByIdException
	 */
	private function genMediaFileFromDB(int $mediaFileId) : MediaFile
	{
		$mediaFileRepository = new MediaFileRepository();
		/** @var MediaEntity $result */
		$result = $mediaFileRepository->getMediaFileById($mediaFileId);
		if (is_null($result)) 
		{
			throw new NoMediaFileFoundByIdException('No MediaFile found for ID: '.$mediaFileId);
		}
		return new MediaFile(
			$result->getId(),
			$result->getMime(),
			$result->getHeight(),
			$result->getWidth(),
			$result->getThumbHeight(),
			$result->getThumbWidth(),
			$result->getBigHeight(),
			$result->getBigWidth(),
			$result->getUrl(),
			$result->getThumbUrl(),
			$result->getBigUrl(),
			$result->getTitleTag(),
			$result->getAltTag()
		);
	}
}