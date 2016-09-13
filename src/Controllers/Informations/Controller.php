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
			$menuService = new MenuService();
			$mainMenu = $menuService->getMainMenu();
			$footerMenu = $menuService->getFooterMenu();
			$accountMenu = $menuService->getAccountMenu();

			new TwigRendering(
				'Informations/index.twig',
				[
					'controllerName'=>'Informations',
					'actionName' => 'index',
					'mainMenu' => $mainMenu,
					'footerMenu' => $footerMenu,
					'accountMenu' => $accountMenu,
				]
			);

		}


		
	}