<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 21.10.2016
	 * Time: 09:20
	 */

	namespace Class152\PizzaMamamia\Interfaces\Product;


	use Class152\PizzaMamamia\Interfaces\AbstractIteratorInterface;
	use Class152\PizzaMamamia\Interfaces\PriceInterface;

	/**
	 * Interface ProductComponentsListInterface
	 * TODO: implement this interface
	 *
	 * @package Class152\PizzaMamamia\Interfaces\Product
	 */
	interface ProductComponentsListInterface extends AbstractIteratorInterface
	{
		/**
		 * @return ProductComponentInterface
		 */
		public function current() : ProductComponentInterface;

		/**
		 * @return \Class152\PizzaMamamia\Interfaces\PriceInterface
		 */
		public function getAdditionalPrice() : PriceInterface;

		/**
		 * gets the entity in string form as xml, serialize or json
		 *
		 * @return string
		 */
		public function __toString() : string;

	}