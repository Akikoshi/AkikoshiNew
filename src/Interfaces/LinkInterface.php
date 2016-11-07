<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 17.10.2016
	 * Time: 14:51
	 */
	namespace Class152\PizzaMamamia\Interfaces;


	/**
	 * Class Link
	 *
	 * @package Class152\PizzaMamamia\Library
	 */
	interface LinkInterface
	{
		/**
		 * Link constructor.
		 *
		 * @param string $url
		 * @param string $text
		 * @param string $title
		 * @param string $css
		 */
		public function __construct( string $url, string $text, string $title = '', string $css = '' );

		/**
		 * @return string
		 */
		public function getTitle() : string;

		/**
		 * @return string
		 */
		public function getText() : string;

		/**
		 * @return string
		 */
		public function getUrl() : string;

		/**
		 * @return string
		 */
		public function getCss() : string;

	}