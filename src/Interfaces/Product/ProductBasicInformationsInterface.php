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
		public function getId() : string;

		/**
		 * @return string
		 */
		public function getName() : string;

		/**
		 * @return MediaFileInterface
		 */
		public function getThumb() : MediaFileInterface;

		/**
		 * text type depends of current scope
		 *
		 * @return string
		 */
		public function getDescription() : string;

		/**
		 * @return bool
		 */
		public function hasDescription() : bool;

		/**
		 * @return bool
		 */
		public function isSingle() : bool;

		/**
		 * @return bool
		 */
		public function hasVariants() : bool;

		/**
		 * @return ProductVariantsIteratorInterface
		 */
		public function getVariants() : ProductVariantsIteratorInterface;

		public function getDefaultVariant() : ProductVariantInterface;

	}