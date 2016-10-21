<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 21.10.2016
	 * Time: 10:13
	 */

	namespace Class152\PizzaMamamia\Interfaces\Product;


	/**
	 * Interface ProductComponentInterface
	 * TODO: implemte it
	 *
	 * @package Class152\PizzaMamamia\Interfaces\Product
	 */
	interface ProductComponentInterface extends ProductBasicInformationsInterface
	{

		public function isConfigured();

		public function isReplaced();

		public function isOption();

		public function isReplaceable();

		public function isRemoveable();
	}