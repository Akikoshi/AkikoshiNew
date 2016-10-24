<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 21.10.2016
	 * Time: 11:07
	 */

	namespace Class152\PizzaMamamia\Interfaces\User;


	use Class152\PizzaMamamia\Interfaces\AbstractIteratorInterface;

	/**
	 * Interface UserInterface
	 *
	 * @package Class152\PizzaMamamia\Interfaces\User
	 */
	interface UserInterface
	{

		/**
		 * male|female|company
		 *
		 * @return string
		 */
		public function getGender() : string;

		/**
		 * @return string
		 */
		public function getFirstName() : string;

		/**
		 * @return string
		 */
		public function getLastName() : string;

		/**
		 * @return string
		 */
		public function getNameCompound() : string;

		/**
		 * @return bool
		 */
		public function hasOrdered() : bool;

		/**
		 * @return AbstractIteratorInterface
		 */
		public function getEmails() : AbstractIteratorInterface;

		/**
		 * @return AbstractIteratorInterface
		 */
		public function getPhoneNumbers() : AbstractIteratorInterface;

		/**
		 * @return AbstractIteratorInterface
		 */
		public function getAddresses() : AbstractIteratorInterface;

	}