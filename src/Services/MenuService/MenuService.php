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
	use Class152\PizzaMamamia\Services\MenuService\Library\FooterMenuFactory;
	use Class152\PizzaMamamia\Services\MenuService\Library\ControllerMenuFactory;
	use Class152\PizzaMamamia\Services\MenuService\Library\AccountMenuFactory;
	use Class152\PizzaMamamia\Services\MenuService\Library\MainMenuFactory;
	use Class152\PizzaMamamia\Services\MenuService\Library\MenuItemList;

	class MenuService
	{

		/** @var Request  */
		private $request;
		
		public function __construct(Request $request )
		{
				$this->request = $request;
		}

		public function getControllerMenu() : MenuItemList
		{
			$controllerMenuFactory = new ControllerMenuFactory();
			return $controllerMenuFactory->getControllerMenu();
		}
		
		public function getAccountMenu() : MenuItemList
		{
			$accountMenuFactory = new AccountMenuFactory();
			return $accountMenuFactory->getaccountmenu();
		}

		public function getFooterMenu()
		{
			$FooterMenuFactory = new FooterMenuFactory();
			return $FooterMenuFactory->getControllerFooter();
		}
		
		public function getMainMenu() : MenuItemList
		{
			$mainMenuFactory = new MainMenuFactory();
			return $mainMenuFactory->getMainMenu();
		}
		
		public function getBreadcrumbMenu()
		{
			$breadcrumbMenuFactory = new BreadcrumbMenuFactory($this->request);
			return $breadcrumbMenuFactory->getBreadcrumbMenu();
		}
	}