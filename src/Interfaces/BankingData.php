<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 21.10.2016
	 * Time: 11:54
	 */

	namespace Class152\PizzaMamamia\Interfaces;

	/**
	 * Interface BankingData
	 *
	 * @package Class152\PizzaMamamia\Interfaces
	 */
	interface BankingData
	{

		/**
		 * @return string
		 */
		public function getBank() : string;

		/**
		 * @return string
		 */
		public function getIban() : string;

		/**
		 * @return string
		 */
		public function getBic() : string;

	}