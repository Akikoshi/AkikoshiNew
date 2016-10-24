<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 21.10.2016
	 * Time: 08:52
	 */

	namespace Class152\PizzaMamamia\Interfaces\Product;


	use Class152\PizzaMamamia\Interfaces\AbstractIteratorInterface;

	/**
	 * Interface ProductVariantsIteratorInterface
	 *
	 * @package Class152\PizzaMamamia\Interfaces\Product
	 */
	interface ProductVariantsIteratorInterface extends AbstractIteratorInterface
	{
		/**
		 * @return ProductVariantInterface
		 */
		public function current() : ProductVariantInterface;
	}