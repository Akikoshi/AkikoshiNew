<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 12.09.2016
	 * Time: 13:31
	 */

	namespace Class152\PizzaMamamia\Services\MenuService;


	use Class152\PizzaMamamia\Http\Request;
	use Class152\PizzaMamamia\Services\MenuService\Library\BreadcrumbMenuFactory;
	use Class152\PizzaMamamia\Services\MenuService\Library\ControllerMenuFactory;
	use Class152\PizzaMamamia\Services\MenuService\Library\MenuFactory;
	use Class152\PizzaMamamia\Services\MenuService\Library\MenuItemList;

	class MenuService
	{

		/** @var Request  */
		private $request;
		
		public function __construct(Request $request )
		{
				$this->request = $request;
		}

		/**
		 * @return MenuItemList
		 */
		public function getControllerMenu() : MenuItemList
		{
			$controllerMenuFactory = new ControllerMenuFactory();
			return $controllerMenuFactory->getControllerMenu();
		}

		/**
		 * @return MenuItemList
		 */
		public function getAccountMenu() : MenuItemList
		{
			$accountMenuFactory = new MenuFactory('AccountMenu');
			return $accountMenuFactory->getMenu();
		}

		/**
		 * @return MenuItemList
		 */
		public function getAccountSidebarMenu() : MenuItemList
		{
			$accountMenuFactory = new MenuFactory('AccountMenu');
			return $accountMenuFactory->getMenu();
		}

		/**
		 * @return MenuItemList
		 */
		public function getFooterMenu() : MenuItemList
		{
			$FooterMenuFactory = new MenuFactory('FooterMenu');
			return $FooterMenuFactory->getMenu();
		}

		/**
		 * @return MenuItemList
		 */
		public function getMainMenu() : MenuItemList
		{
			$mainMenuFactory = new MenuFactory('MainMenu');
			return $mainMenuFactory->getMenu();
		}

		/**
		 * @return MenuItemList
		 */
		public function getBreadcrumbMenu() : MenuItemList
		{
			$breadcrumbMenuFactory = new BreadcrumbMenuFactory($this->request);
			return $breadcrumbMenuFactory->getBreadcrumbMenu();
		}
	}