<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 12.09.2016
	 * Time: 13:31
	 */

	namespace Class152\PizzaMamamia\Services\MenuService;


	use Class152\PizzaMamamia\Services\MenuService\Library\ControllerMenuFactory;
	use Class152\PizzaMamamia\Services\MenuService\Library\MenuItemList;

	class MenuService
	{

		public function getControllerMenu() : MenuItemList
		{
			$controllerMenuFactory = new ControllerMenuFactory();
			return $controllerMenuFactory->getControllerMenu();
		}

		public function getFooterMenu()
		{

		}


	}