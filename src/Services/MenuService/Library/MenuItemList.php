<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 12.09.2016
	 * Time: 10:59
	 */

	namespace Class152\PizzaMamamia\Services\MenuService\Library;


	use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
	use Class152\PizzaMamamia\Services\MenuService\Exceptions\MenuItemListNeedsMenuItemsException;

	final class MenuItemList extends AbstractIterator
	{

		/**
		 * MenuItemList constructor.
		 * Checks the type of given items
		 *
		 * @param array|null $array
		 *
		 * @throws \Class152\PizzaMamamia\Services\MenuService\Exceptions\MenuItemListNeedsMenuItemsException
		 */
		public function __construct( array $array = null )
		{
			if( is_null( $array ) )
			{
				return;
			}

			foreach (array_keys($array) as $keys )
			{
				if(
					! is_object( $array[$keys] )
					|| ! is_a( $array[$keys], 'MenuItem' )
				)
				{
					throw new MenuItemListNeedsMenuItemsException(
						'constructor of MenuItemList can only use MenuItem objects'
					);
				}
			}

			$this->iteratorArray = $array;

		}

		/**
		 * adds a given MenuItem
		 *
		 * @param \Class152\PizzaMamamia\Services\MenuService\Library\MenuItem $menuItem
		 */
		public function addItem( MenuItem $menuItem )
		{
			$this->iteratorArray[] = $menuItem;
		}

		/**
		 * overloads the current method for restricted type of return value
		 *
		 * @return \Class152\PizzaMamamia\Services\MenuService\Library\MenuItem
		 */
		public function current() : MenuItem
		{
			return parent::current();
		}

	}