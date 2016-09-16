<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 16.09.2016
 * Time: 10:12
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Library;


class ProductInfoFactory
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

	/**
	 * ProductInfoFactory constructor.
	 * @param int $productId
	 */
	public function __construct( int $productId )
	{
		$this->productId = $productId;

		/*
		 * ToDo: get the product-details from Database
		 */
		$this->productDetails = new ProductItem(
			'IT-Pizza',
			'Die Pizza fuer jeden ITler.',
			'- Pictur-URL -',
			'- Detail-URL -',
			9.99
		);
	}

	/**
	 * @return ProductItem
	 */
	public function getProductDetail() : ProductItem
	{
		return $this->productDetails;
	}
}