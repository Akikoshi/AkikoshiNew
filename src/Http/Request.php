<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 05.09.2016
	 * Time: 14:15
	 */

	namespace Class152\PizzaMamamia\Http;


	class Request
	{
		/** @var string */
		private $requestUri;

		/** @var string */
		private $controllerName;

		/** @var string */
		private $actionName;

		/**
		 * Request constructor.
		 *
		 * @param $requestUri
		 */
		public function __construct( $requestUri )
		{
			$this->requestUri = $requestUri;
			$this->cutUri();
		}

		/**
		 * @return string
		 */
		public function getControllerName(): string
		{
			return $this->controllerName;
		}

		/**
		 * @return string
		 */
		public function getActionName(): string
		{
			return $this->actionName;
		}

		private function cutUri()
		{
			$controller = 'home';
			$action = 'index';

			$pattern = '/^\/([^\/]+)(\/([^\/]+)){0,1}/i';
			preg_match( $pattern, $this->requestUri, $matches );

			if( ! empty( $matches[1] ) ) $controller = $matches[1];
			if( ! empty( $matches[3] ) ) $action = $matches[3];

			$this->controllerName = $this->convertUpperCaseFirst( $controller );
			$this->actionName = strtolower( $action );
		}

		/**
		 * @param string $string
		 *
		 * @return string
		 */
		private function convertUpperCaseFirst( $string )
		{
			$string = strtolower( $string );
			$string = ucfirst( $string );
			return $string;
		}

	}