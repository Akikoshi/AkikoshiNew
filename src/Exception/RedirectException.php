<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 22.09.2016
	 * Time: 14:25
	 */

	namespace Class152\PizzaMamamia\Exception;


	class RedirectException extends PizzaProjectException
	{
		/** @var string */
		protected $url = '/';

		/**
		 * @var string
		 */
		protected $statusCode = '302';

		/**
		 * @param string $url
		 */
		public function setRedirectUrl( string $url = '/' )
		{
			$this->url = $url;
		}

		/**
		 * @param int $statusCode
		 */
		public function setStatusCode( int $statusCode = 302 )
		{
			$this->statusCode = $statusCode;
		}

		/**
		 * @return string
		 */
		public function getUrl(): string
		{
			return $this->url;
		}

		/**
		 * @return string
		 */
		public function getStatusCode(): string
		{
			return $this->statusCode;
		}

	}