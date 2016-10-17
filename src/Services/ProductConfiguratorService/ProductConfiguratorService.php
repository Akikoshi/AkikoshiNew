<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 14.09.2016
 * Time: 10:23
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService;


use Class152\PizzaMamamia\Services\ProductConfiguratorService\Library\ProductConfiguratorDataObject;
use Class152\PizzaMamamia\Services\ProductConfiguratorService\Library\ProductConfiguratorFactory;

class ProductConfiguratorService
{
	/**
	 * @var int
	 * Hold the id of the product.
	 */
	private $productId;


	/**
	 * ProductConfiguratorService constructor.
	 * ToDo: get the product-ID per Request or direct??
	 */
	public function __construct(  )
	{
		$this->productId = 33;
		/* ToDo: test if product valid ELSE throw exeption */
	}

	/**
	 * @return ProductConfiguratorDataObject
	 */
	public function getProductConfigurator() : ProductConfiguratorDataObject
	{
		$productConfiguratorFactory = new ProductConfiguratorFactory( $this->productId );
		return $productConfiguratorFactory->getConfiguratorProductData();
	}

}