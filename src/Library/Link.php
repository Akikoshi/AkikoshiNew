<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 17.10.2016
	 * Time: 14:45
	 */

	namespace Class152\PizzaMamamia\Library;

	use Class152\PizzaMamamia\Interfaces\LinkInterface;

	/**
	 * Class Link
	 *
	 * @package Class152\PizzaMamamia\Library
	 */
	class Link implements LinkInterface
	{
		/** @var string */
		private $title;

		/** @var string */
		private $text;

		/** @var string */
		private $url;

		/** @var string */
		private $css;

		/**
		 * Link constructor.
		 *
		 * @param string $url
		 * @param string $text
		 * @param string $title
		 * @param string $css
		 */
		public function __construct( $url, $text, $title = '', $css = '' )
		{
			$this->url = $url;
			$this->text = $text;
			$this->title = $title;
			$this->css = $css;
		}

		/**
		 * @return string
		 */
		public function getTitle(): string
		{
			return $this->title;
		}

		/**
		 * @return string
		 */
		public function getText(): string
		{
			return $this->text;
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
		public function getCss(): string
		{
			return $this->css;
		}

	}