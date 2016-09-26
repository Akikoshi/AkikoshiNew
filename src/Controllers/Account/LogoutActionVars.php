<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 22.09.2016
	 * Time: 14:53
	 */

	namespace Class152\PizzaMamamia\Controllers\Account;


	class LogoutActionVars
	{
		/** @var string */
		private $redirectUrl;

		/**
		 * LogoutActionVars constructor.
		 *
		 * @param string|null $redirectUrl
		 */
		public function __construct( $redirectUrl )
		{
			$this->redirectUrl = is_string( $redirectUrl ) ? $redirectUrl : '/';
		}

		/**
		 * @return string
		 */
		public function getRedirectUrl(): string
		{
			return $this->redirectUrl;
		}

	}