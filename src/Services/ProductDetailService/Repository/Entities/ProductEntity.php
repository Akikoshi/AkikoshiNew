<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 22.09.2016
	 * Time: 13:19
	 */

	namespace Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities;


	class ProductEntity
	{
		/** @var int */
		private $parentId;

		/** @var string */
		private $name;

		/** @var int  */
		private $productGroup;

		/** @var float  */

		private $GrossPrice;

		/** @var string */

		private $type;
		/**
		 * UserEntity constructor.
		 *
		 * @param array $userRow
		 */
		public function __construct( array $userRow )
		{

			$this->name = $userRow['name'];
			$this->parentId = $userRow['parentId'];
			$this->productGroup = $userRow['productGroup'];
			$this->GrossPrice = $userRow['GrossPrice'];
			$this->type = $userRow['type'];

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
		 * @return float
		 */
		public function getGrossPrice() :float
		{
			return $this->GrossPrice;
		}

		/**
		 * @return int
		 */
		public function getProductGroup() :int
		{
			return $this->parentId;
		}

		/**
		 * @return string
		 */
		public function getType():string
		{
			return $this->type;
		}

	}