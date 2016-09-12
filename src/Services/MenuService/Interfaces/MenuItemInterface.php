<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 12.09.2016
	 * Time: 11:20
	 */
	namespace Class152\PizzaMamamia\Services\MenuService\Interfaces;

	use Class152\PizzaMamamia\Services\MenuService\Library\MenuItemList;

	interface MenuItemInterface
	{
		/**
		 * MenuItem constructor.
		 *
		 * @param string                                                           $text
		 * @param string                                                           $url
		 * @param \Class152\PizzaMamamia\Services\MenuService\Library\MenuItemList $menuItemList
		 */
		public function __construct( string $text, string $url, MenuItemList $menuItemList = null );

		/**
		 * @return string
		 */
		public function getText() : string;

		/**
		 * @return string
		 */
		public function getUrl() : string;

		/**
		 * @return boolean
		 */
		public function isHasChildren() : bool;

		/**
		 * @return \Class152\PizzaMamamia\Services\MenuService\Library\MenuItemList
		 */
		public function getMenuItemList() : MenuItemList;
	}