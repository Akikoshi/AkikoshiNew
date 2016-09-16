<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 05.09.2016
	 * Time: 14:30
	 */

	namespace Class152\PizzaMamamia\Controllers\Informations;


	use Class152\PizzaMamamia\AbstractClasses\AbstractController;
	use Class152\PizzaMamamia\Library\TwigRendering;
	use Class152\PizzaMamamia\Services\MenuService\MenuService;


	class Controller extends AbstractController
	{
		/**
		 * shows start page
     	*/
		public function indexAction()
		{

			$menuService = new MenuService($this->request);
			$mainMenu = $menuService->getMainMenu();
			$accountMenu = $menuService->getAccountMenu();
			$footerMenu = $menuService->getFooterMenu();
			$breadcrumbMenu = $menuService->getBreadcrumbMenu();

			new TwigRendering(
				'Informations/index.twig',
				[
					'controllerName'=>'Informations',
					'actionName' => 'index',
					'mainMenu' => $mainMenu,
					'footerMenu' => $footerMenu,
					'accountMenu' => $accountMenu,
					'breadcrumbMenu' => $breadcrumbMenu,
				]
			);

		}

		public function gbtAction()
		{

			$menuService = new MenuService($this->request);
			$mainMenu = $menuService->getMainMenu();
			$accountMenu = $menuService->getAccountMenu();
			$footerMenu = $menuService->getFooterMenu();
			$breadcrumbMenu = $menuService->getBreadcrumbMenu();

			new TwigRendering(
				'Informations/gbt.twig',
				[
					'controllerName'=>'Informations',
					'actionName' => 'gbt',
					'mainMenu' => $mainMenu,
					'footerMenu' => $footerMenu,
					'accountMenu' => $accountMenu,
					'breadcrumbMenu' => $breadcrumbMenu,
				]
			);

		}
		public function imprintAction()
		{

			$menuService = new MenuService($this->request);
			$mainMenu = $menuService->getMainMenu();
			$accountMenu = $menuService->getAccountMenu();
			$footerMenu = $menuService->getFooterMenu();
			$breadcrumbMenu = $menuService->getBreadcrumbMenu();

			new TwigRendering(
				'Informations/imprint.twig',
				[
					'controllerName'=>'Informations',
					'actionName' => 'imprint',
					'mainMenu' => $mainMenu,
					'footerMenu' => $footerMenu,
					'accountMenu' => $accountMenu,
					'breadcrumbMenu' => $breadcrumbMenu,
				]
			);

		}

		public function contactAction()
		{

			$menuService = new MenuService($this->request);
			$mainMenu = $menuService->getMainMenu();
			$accountMenu = $menuService->getAccountMenu();
			$footerMenu = $menuService->getFooterMenu();
			$breadcrumbMenu = $menuService->getBreadcrumbMenu();

			new TwigRendering(
				'Informations/contact.twig',
				[
					'controllerName'=>'Informations',
					'actionName' => 'contact',
					'mainMenu' => $mainMenu,
					'footerMenu' => $footerMenu,
					'accountMenu' => $accountMenu,
					'breadcrumbMenu' => $breadcrumbMenu,
				]
			);

		}
		public function qualityAction()
		{

			$menuService = new MenuService($this->request);
			$mainMenu = $menuService->getMainMenu();
			$accountMenu = $menuService->getAccountMenu();
			$footerMenu = $menuService->getFooterMenu();
			$breadcrumbMenu = $menuService->getBreadcrumbMenu();

			new TwigRendering(
				'Informations/quality.twig',
				[
					'controllerName'=>'Informations',
					'actionName' => 'quality',
					'mainMenu' => $mainMenu,
					'footerMenu' => $footerMenu,
					'accountMenu' => $accountMenu,
					'breadcrumbMenu' => $breadcrumbMenu,
				]
			);

		}

		
	}