<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 13:53
	 */

	namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;

	use Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities\ProductEntity;

	use Class152\PizzaMamamia\Services\ProductDetailService\Repository\ProductRepository;
	use Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException;

	class Product
	{
		/** @var int */
		private $parentId;

		/** @var string */
		private $name;

		/** @var int  */
		private $productGroup;

		/** @var float  */


		private $type;

		
		public function __construct( int $productId )
		{
			$sql= new ProductRepository();
			$productentity=$sql->getProductById(  $productId );
			
			$this->name = $productentity->getName();
			$this->parentId = $productentity->getParentId();
			$this->productGroup = $productentity->getProductGroup();
			
			$this->type = $productentity->getType();

		}


		/**
		 * @return int
		 */
		public function getParentId(): int
		{
			return $this->parentId;
		}



		/**
		 * @return string
		 */
		public function getId(): string
		{
			return $this->name;
		}


		/**
		 * @return int
		 */
		public function getProductGroup()
		{
			return $this->parentId;
		}

		/**
		 * @return string
		 */
		public function getType()
		{
			return $this->type;
		}

	}