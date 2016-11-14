<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 13:45
	 */

	namespace Class152\PizzaMamamia\Services\ProductDetailService;


	use Class152\PizzaMamamia\Services\ProductDetailService\Library\DetailFactory;
	use Class152\PizzaMamamia\Services\SessionService\SessionService;
	use Class152\PizzaMamamia\Services\ProductDetailService\Library\Product;
	use Class152\PizzaMamamia\Services\UserService\Library\UserFactory;

	class ProductDetailService
	{
		/** @var User */
		private $user;

		public function __construct( $productid)
		{
			

		}

		/**
		 * @param int $productId
		 * @return Product
		 */
		public function getProductById( int $productId ) : Product
		{
			$factory = new DetailFactory($productId);
			return $factory->getProduct();
		}



	}