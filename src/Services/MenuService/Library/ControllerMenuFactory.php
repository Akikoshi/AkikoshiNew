<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 12.09.2016
	 * Time: 13:33
	 */

	namespace Class152\PizzaMamamia\Services\MenuService\Library;


	class ControllerMenuFactory
	{
		/** @var MenuItemList */
		public $controllerMenu;

		public function __construct()
		{
			$this->controllerMenu = new MenuItemList();

			$this->controllerMenu->addItem(
				new MenuItem( 'Home', '/home/index' )
			);

			$this->controllerMenu->addItem(
				new MenuItem( 'Checkout', '/checkout/index' )
			);

			$this->controllerMenu->addItem(
				new MenuItem( 'Informations', '/informations/index' )
			);

			$this->controllerMenu->addItem(
				new MenuItem( 'ShoppingCart', '/shoppingcart/index' )
			);

		}

		/** @var MenuItemList */
		public function getControllerMenu() : MenuItemList
		{
			return $this->controllerMenu;
		}

	}