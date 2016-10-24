<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 21.10.2016
	 * Time: 08:35
	 */

	namespace Class152\PizzaMamamia\Interfaces\Product;

	use Class152\PizzaMamamia\Interfaces\MediaFileInterface;

	/**
	 * Interface ProductBasicInformationsInterface
	 * for a essential View of any products
	 *
	 * @package Class152\PizzaMamamia\Interfaces\Product
	 */
	interface ProductBasicInformationsInterface
	{
		/**
		 * @return string
		 */
		public function getId();

		/**
		 * @return string
		 */
		public function getName();

		/**
		 * @return MediaFileInterface
		 */
		public function getThumb();

		/**
		 * text type depends of current scope
		 *
		 * @return string
		 */
		public function getDescription();

		/**
		 * @return bool
		 */
		public function hasDescription();

		/**
		 * @return bool
		 */
		public function isSingle();

		/**
		 * @return bool
		 */
		public function hasVariants();

		/**
		 * @return ProductVariantsIteratorInterface
		 */
		public function getVariants();

	}