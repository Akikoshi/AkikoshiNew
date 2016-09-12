<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 12.09.2016
	 * Time: 10:51
	 */

	namespace Class152\PizzaMamamia\Services\MenuService\Library;


	use Class152\PizzaMamamia\Services\MenuService\Interfaces\MenuItemInterface;

	final class MenuItem implements MenuItemInterface
	{
		/** @var string */
		private $text;

		/** @var string */
		private $url;

		/** @var bool */
		private $hasChildren = false;

		/** @var MenuItemList */
		private $menuItemList;

		/**
		 * MenuItem constructor.
		 *
		 * @param string                                                           $text
		 * @param string                                                           $url
		 * @param \Class152\PizzaMamamia\Services\MenuService\Library\MenuItemList $menuItemList
		 */
		public function __construct(
			string $text,
			string $url,
			MenuItemList $menuItemList = null
		)
		{
			$this->text = $text;
			$this->url = $url;
			if( ! is_null( $menuItemList ) && 0 < count( $menuItemList ) )
			{
				$this->hasChildren = true;
				$this->menuItemList = $menuItemList;
			}
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
		 * @return boolean
		 */
		public function isHasChildren(): bool
		{
			return $this->hasChildren;
		}

		/**
		 * @return \Class152\PizzaMamamia\Services\MenuService\Library\MenuItemList
		 */
		public function getMenuItemList(): MenuItemList
		{
			if( $this->hasChildren === false )
			{
				return new MenuItemList();
			}
			return $this->menuItemList;
		}




	}