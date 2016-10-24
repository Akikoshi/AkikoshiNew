<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 21.10.2016
	 * Time: 11:52
	 */

	namespace Class152\PizzaMamamia\Interfaces\Order;


	use Class152\PizzaMamamia\Interfaces\AddressInterface;
	use Class152\PizzaMamamia\Interfaces\BankingData;
	use Class152\PizzaMamamia\Interfaces\ShoppingCart\ShoppingCartInterface;

	/**
	 * Interface OrderInterface
	 *
	 * @package Class152\PizzaMamamia\Interfaces\Order
	 */
	interface OrderInterface extends ShoppingCartInterface
	{
		/**
		 * @return string
		 */
		public function getOrderId() : string;

		/**
		 * @return \DateTimeImmutable
		 */
		public function getOrderDate() : \DateTimeImmutable;

		/**
		 * cash|billing|banking|paypal|Amazonpayment|creditcard
		 *
		 * @return string
		 */
		public function getPaymentMethod() : string;

		/**
		 * @return string
		 */
		public function getUserId() : string;

		/**
		 * @return \Class152\PizzaMamamia\Interfaces\AddressInterface
		 */
		public function getShippingAddress() : AddressInterface;

		/**
		 * @return bool
		 */
		public function hasPaymentAddress(): bool;

		/**
		 * @return \Class152\PizzaMamamia\Interfaces\AddressInterface
		 */
		public function getPaymentAddress() : AddressInterface;

		/**
		 * @return bool
		 */
		public function hasBankingData() : bool;

		/**
		 * @return \Class152\PizzaMamamia\Interfaces\BankingData
		 */
		public function getBankingData() : BankingData;

	}