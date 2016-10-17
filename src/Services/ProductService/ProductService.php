<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 13:45
	 */

	namespace Class152\PizzaMamamia\Services\UserService;


	use Class152\PizzaMamamia\Services\SessionService\SessionService;
	use Class152\PizzaMamamia\Services\UserService\Library\Product;
	use Class152\PizzaMamamia\Services\UserService\Library\UserFactory;

	class ProductService
	{
		/** @var User */
		private $user;

		public function __construct( $productid)
		{
			$this->sessionService = $sessionService;

		}

		/**
		 * @param string $username
		 * @param string $password
		 *
		 * @return \Class152\PizzaMamamia\Services\UserService\Library\User
		 */
		public function getProductById( int $productId ) : Product
		{
			$product=new product($productId);
			return $product;
		}



	}