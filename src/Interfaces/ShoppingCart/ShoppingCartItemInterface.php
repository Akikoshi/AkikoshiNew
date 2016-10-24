<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 21.10.2016
	 * Time: 10:39
	 */

	namespace Class152\PizzaMamamia\Interfaces\ShoppingCart;


	use Class152\PizzaMamamia\Interfaces\LinkInterface;
	use Class152\PizzaMamamia\Interfaces\Product\ProductBasicInformationsInterface;

	interface ShoppingCartItemInterface extends ProductBasicInformationsInterface
	{

		/**
		 * @return int
		 */
		public function getAmount() : int;

		/**
		 * @return int
		 */
		public function getMaxAmount() : int;

		/**
		 * @return bool
		 */
		public function hasMaxAmount() : bool;

		/**
		 * @return bool
		 */
		public function isReducedByCampaign() : bool;

		/**
		 * @return \Class152\PizzaMamamia\Interfaces\LinkInterface
		 */
		public function getRemoveItemUrl() : LinkInterface;

		/**
		 * @return \Class152\PizzaMamamia\Interfaces\LinkInterface
		 */
		public function getIncreaseItemUrl() : LinkInterface;

		/**
		 * @return bool
		 */
		public function isIncreaseable() : bool;

		/**
		 * @return \Class152\PizzaMamamia\Interfaces\LinkInterface
		 */
		public function getDecreaseItemUrl() : LinkInterface;

		/**
		 * @return bool
		 */
		public function isDecreaseable() : bool;

	}