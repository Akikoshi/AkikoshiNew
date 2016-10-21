<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 21.10.2016
	 * Time: 10:30
	 */

	namespace Class152\PizzaMamamia\Interfaces\ShoppingCart;


	use Class152\PizzaMamamia\Interfaces\AbstractIteratorInterface;
	use Class152\PizzaMamamia\Interfaces\LinkInterface;
	use Class152\PizzaMamamia\Interfaces\PriceInterface;

	/**
	 * Interface ShoppingCartInterface
	 *
	 * @package Class152\PizzaMamamia\Interfaces\ShoppingCart
	 */
	interface ShoppingCartInterface extends AbstractIteratorInterface
	{

		/**
		 * @return \Class152\PizzaMamamia\Interfaces\PriceInterface
		 */
		public function getSummeryPrice() : PriceInterface;

		/**
		 * @return \Class152\PizzaMamamia\Interfaces\ShoppingCart\ShoppingCartItemInterface
		 */
		public function current() : ShoppingCartItemInterface;

		/**
		 * @return \Class152\PizzaMamamia\Interfaces\LinkInterface
		 */
		public function getCheckoutUrl() : LinkInterface;

		/**
		 * where we can go after reading the shoppingCart
		 *
		 * @return \Class152\PizzaMamamia\Interfaces\LinkInterface
		 */
		public function getReferer() : LinkInterface;

	}