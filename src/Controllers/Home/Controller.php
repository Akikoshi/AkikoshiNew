<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 05.09.2016
	 * Time: 14:30
	 */

	namespace Class152\PizzaMamamia\Controllers\Home;


	use Class152\PizzaMamamia\AbstractClasses\AbstractController;
	use Class152\PizzaMamamia\Library\TwigRendering;
	use Class152\PizzaMamamia\Services\MenuService\MenuService;
	use Class152\PizzaMamamia\Services\ProductService\Library\ProductFactory;
	use Class152\PizzaMamamia\Services\ProductService\ProductService;

	class Controller extends AbstractController
	{
		public function indexAction()
		{

			$menuService = new MenuService();
			$mainMenu = $menuService->getMainMenu();
			$accountMenu = $menuService->getAccountMenu();
			$footerMenu = $menuService->getFooterMenu();
			$productService = new ProductService();
			$productItem = $productService->getProductItem();

			new TwigRendering(
				'Home/index.twig',
				[
					'controllerName'=>'Home',
					'actionName' => 'index',
				  'mainMenu' => $mainMenu,
				  'footerMenu' => $footerMenu,
				  'accountMenu' => $accountMenu,
					'productItem'=> $productItem,
				]
			);
		}

	}