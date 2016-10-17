<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 14:23
	 */

	namespace Class152\PizzaMamamia\Services\UserService\Repository;


	use Class152\PizzaMamamia\Database\MySql;
	use Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException;
	use Class152\PizzaMamamia\Services\UserService\Repository\Entities\ProductEntity;

	class ProductRepository
	{
		/** @var Mysql */
		private $db;

		public function __construct()
		{
			$db = new MySql();
			$this->db = $db->getInstance();
		}

		/**
		 * @param string $userName
		 * @param string $password
		 *
		 * @return \Class152\PizzaMamamia\Services\UserService\Repository\Entities\UserEntity
		 * @throws \Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException
		 */
		public function  getProductById( int $productId ) : ProductEntity
		{
            $sql = "SELECT  name,parentId,productGroup,GrossPrice,type FROM Products WHERE id = " 
                . $productId . ";";
			$result = $this->db->query( $sql );
			$product = $result->fetch_assoc();
			if( empty($product) )
			{
				throw new NotLoggedInException('Login failed');
			}
			return new  ProductEntity( $product);
		}
		
	}