<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 17.10.2016
 * Time: 11:06
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;

use Class152\PizzaMamamia\Services\ProductConfiguratorService\Library\AddendaItemList;
use Class152\PizzaMamamia\Services\ProductDetailService\Library\Addenda\AddendaItem;
use Class152\PizzaMamamia\Services\ProductDetailService\Library\Price;
use Class152\PizzaMamamia\Services\ProductDetailService\Library\Product;
use Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities\MediaFileEntity;
use Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities\AddendaEntity;
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

	/**
	 * @var ComponentList
	 */
	private $componentList;
	
    /**
     * @var AddendaItemList
     */
    private $additiveItemList;

    /**
     * @var AddendaItemList
     */
    private $allergicItemList;

    public function __construct( int $productId )
    {
        $this->productID = $productId;

        $this->repository = new ProductRepository( $productId );
        $productEntity = $this->repository->getProductEntity();

        $this->mediaFileList = new MediaFileList();
        $this->generateMediaFileList();

		$this->componentList = new ComponentList();
		$this->generateComponentList();


		$price = new Price(
			$productEntity->getGrossPrice(),
			$productEntity->getVat()
		);

		
        $this->product = new Product(
            $price,
            $this->mediaFileList,
			$productEntity->getLongDescription()   // 

		

        );

	}


	private function generateMediaFileList()
	{
		$mediaFileGenerator = $this->repository->getMediaFiles();

		/** @var MediaFileEntity $mediaEntity */
		foreach ( $mediaFileGenerator as $mediaEntity ) {
			$this->mediaFileList->addItem( new MediaFile(
				$this->productID,
				$mediaEntity->getMime(),
				$mediaEntity->getHeight(),
				$mediaEntity->getWidth(),
				$mediaEntity->getThumbHeight(),
				$mediaEntity->getThumbWidth(),
				$mediaEntity->getBigHeight(),
				$mediaEntity->getThumbUrl(),
				$mediaEntity->getBigWidth(),
				$mediaEntity->getUrl(),
				$mediaEntity->getBigUrl(),
				$mediaEntity->getTitleTag(),
				$mediaEntity->getAltTag()
			) );
		}
	}

	private function generateComponentList()
	{
		$componentGenerator = $this->repository->getComponentsEntity();

		foreach ( $componentGenerator as $componentEntity ) {

			/** @var MediaFileEntity $mediaEntity */
			$mediaEntity=$this->repository->getMediaFile($componentEntity->getFkMediaFiles);

			$mediaFile=new MediaFile(
				$componentEntity->getFkMediaFiles,
				$mediaEntity->getMime(),
				$mediaEntity->getHeight(),
				$mediaEntity->getWidth(),
				$mediaEntity->getThumbHeight(),
				$mediaEntity->getThumbWidth(),
				$mediaEntity->getBigHeight(),
				$mediaEntity->getThumbUrl(),
				$mediaEntity->getBigWidth(),
				$mediaEntity->getUrl(),
				$mediaEntity->getBigUrl(),
				$mediaEntity->getTitleTag(),
				$mediaEntity->getAltTag()
			) ;
			$this->componentList->addItem( new Component(
				$componentEntity->getComponentId,
				$componentEntity->getName,
				$componentEntity->getComponentGroup,
				$mediaFile,
				$componentEntity->getOrdering
			));
		}
	}
	
	
	/**
	 * @return \Class152\PizzaMamamia\Services\ProductDetailService\Library\Product
	 */
	public function getProduct() : Product
	{

    /**
     * @param int $componentId
     */
    private function generateAdditiveList( int $componentId )
    {
        $additiveGenerator = $this->repository->getAdditiveEntities( $componentId );

        /** @var AddendaEntity $additiveEntity */
        foreach ( $additiveGenerator as $additiveEntity ) {
            $this->additiveItemList->addItem( new AddendaItem(
                $additiveEntity->getId(),
                $additiveEntity->getType(),
                $additiveEntity->getName(),
                $additiveEntity->getTag(),
                $additiveEntity->getComponentId()
            ) );
        }
    }


    /**
     * @param int $componentId
     */
    private function generateAlergicList( int $componentId )
    {
        $allergicGenerator = $this->repository->getAdditiveEntities( $componentId );

        /** @var AddendaEntity $allergicEntity */
        foreach ( $allergicGenerator as $allergicEntity ) {
            $this->allergicItemList->addItem( new AddendaItem(
                $allergicEntity->getId(),
                $allergicEntity->getType(),
                $allergicEntity->getName(),
                $allergicEntity->getTag(),
                $allergicEntity->getComponentId()
            ) );
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