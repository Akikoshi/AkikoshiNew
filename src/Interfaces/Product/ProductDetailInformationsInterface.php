<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 21.10.2016
	 * Time: 08:24
	 */

	namespace Class152\PizzaMamamia\Interfaces\Product;

    use Class152\PizzaMamamia\Interfaces\MediaFileListInterface;

    /**
	 * Interface ProductDetailInformationsInterface
	 *
	 * @package Class152\PizzaMamamia\Interfaces\Product
	 */
	interface ProductDetailInformationsInterface extends ProductBasicInformationsInterface
	{

        /**
         * @return MediaFileListInterface
         */
        public function getImages() : MediaFileListInterface;

		/**
		 * @return bool
		 */
		public function hasImages();

		/**
		 * @return ProductComponentsListInterface
		 */
		public function getComponents() : ProductComponentsListInterface;

		/*
		 * @return bool
		 */
		public function hasComponents() : bool;

		/**
		 * @return ProductAdditivesListInterface
		 */
		public function getAdditives() : ProductAdditivesListInterface;

		/**
		 * @return bool
		 */
		public function hasAdditives() : bool;

		/**
		 * @return ProductAdditivesListInterface
		 */
		public function getAllergics() : ProductAdditivesListInterface;

		/**
		 * @return bool
		 */
		public function hasAllergics() : bool;

	}