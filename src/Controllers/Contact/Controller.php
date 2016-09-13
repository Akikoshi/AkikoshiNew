<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 05.09.2016
	 * Time: 14:30
	 */

	namespace Class152\PizzaMamamia\Controllers\Contact;


	use Class152\PizzaMamamia\AbstractClasses\AbstractController;
	use Class152\PizzaMamamia\Library\TwigRendering;
	use Class152\PizzaMamamia\Services\MenuService\MenuService;

	class Controller extends AbstractController
	{
		public function indexAction()
		{
			$menuService = new MenuService($this->request);
			$mainMenu = $menuService->getMainMenu();
			$accountMenu = $menuService->getAccountMenu();
			$footerMenu = $menuService->getFooterMenu();
			$breadCrumb = $menuService->getBreadcrumbMenu();
			

			new TwigRendering(
				'Contact/index.twig',
				[
					'controllerName'=>'Contact',
					'actionName' => 'index',
					'mainMenu' => $mainMenu,
					'footerMenu' => $footerMenu,
					'accountMenu' => $accountMenu,
					'breadcrumbMenu' => $breadCrumb,
				]
			);
		}
	}