<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 21.10.2016
	 * Time: 11:10
	 */

	namespace Class152\PizzaMamamia\Interfaces;


	/**
	 * Interface AddressInterface
	 *
	 * @package Class152\PizzaMamamia\Interfaces
	 */
	interface AddressInterface
	{
		/**
		 * @return string
		 */
		public function getLine1() : string;

		/**
		 * @return string
		 */
		public function getLine2() : string;

		/**
		 * @return string
		 */
		public function getCo() : string;

		/**
		 * @return string
		 */
		public function getZipCode(): string;

		/**
		 * @return string
		 */
		public function getCity(): string;

		/**
		 * @return string
		 */
		public function getStreet() : string;

		/**
		 * @return string
		 */
		public function getHouse() : string;

	}