<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 14.09.2016
 * Time: 11:57
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Library;


class ProductConfiguratorFactory
{

	/** ToDo:Complete this Class */

	/**
	 * @var ProductConfiguratorDataObject
	 * Data-Holder for all product-configurator-data
	 */
	private $productDataObject;

	/**
	 * @var integer
	 */
	private $productId;

	/**
	 * ProductConfiguratorFactory constructor.
	 * @param int $productId
	 */
	public function __construct( int $productId )
	{
		$this->productId = $productId;

		/*
		ToDo: getIngredientList() 	-> ProductIngredientFactory
		ToDo: getUsedAddonList() 	-> ProductAddonFactory
		ToDo: getAddonList()		-> ProductAddonFactory
		ToDo: collectAdditives()	-> function
		ToDo: collectAllergens()	-> function
		*/
	}


	private function getProductInfo()
	{
		$productInfoFactory = new ProductInfoFactory( $this->productId );
		$this->productDataObject->setProductDetail( $productInfoFactory->getProductDetail() );
	}

	private function getIngredientList()
	{
		$productIngredientListFactory = new ProductIngredientFactory( $this->productId );
		/* ToDo: get the infos */
	}

	/**
	 * @return ProductConfiguratorDataObject
	 */
	public function getConfiguratorProductData() : ProductConfiguratorDataObject
	{
		return $this->productDataObject;
	}

}