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
		/**
		 * @var string
		 */
		private $name;

		/**
		 * @var string
		 */
		private $internalName;

		/**
		 * @var int
		 */
		private $parentId;

		/** @var int */
		private $productGroup;

		/**
		 * @var float
		 */
		private $GrossPrice;

		/**
		 * @var int
		 */
		private $vat;

		/**
		 * @var string
		 */
		private $type;

		/**
		 * @var string
		 */
		private $shortDescription;

		/**
		 * @var string
		 */
		private $longDescription;

		public function __construct(
			$name,
			$internalName,
			$parentId,
			$productGroup,
			$grossPrice,
			$vat,
			$type,
			$shortDescription,
			$longDescription
		)
		{
			$this->name = $name;
			$this->internalName = $internalName;
			$this->parentId = $parentId;
			$this->productGroup = $productGroup;
			$this->GrossPrice = $grossPrice;
			$this->vat = $vat;
			$this->type = $type;
			$this->shortDescription = $shortDescription;
			$this->longDescription = $longDescription;
		}

		/**
		 * @return string
		 */
		public function getName()
		{
			return $this->name;
		}

		/**
		 * @return string
		 */
		public function getInternalName()
		{
			return $this->internalName;
		}

		/**
		 * @return int
		 */
		public function getParentId()
		{
			return $this->parentId;
		}

		/**
		 * @return int
		 */
		public function getProductGroup()
		{
			return $this->productGroup;
		}

		/**
		 * @return float
		 */
		public function getGrossPrice()
		{
			return $this->GrossPrice;
		}

		/**
		 * @return int
		 */
		public function getVat()
		{
			return $this->vat;
		}

		/**
		 * @return string
		 */
		public function getType()
		{
			return $this->type;
		}

		/**
		 * @return string
		 */
		public function getShortDescription()
		{
			return $this->shortDescription;
		}

		/**
		 * @return string
		 */
		public function getLongDescription()
		{
			return $this->longDescription;
		}

	}