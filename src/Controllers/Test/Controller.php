<?php
/**
 * Created by PhpStorm.
 * User: cbiedermann
 * Date: 07.09.2016
 * Time: 14:19
 */

namespace Class152\PizzaMamamia\Controllers\Test;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Library\TwigRendering;
use Class152\PizzaMamamia\Services\MenuService\MenuService;
use Class152\PizzaMamamia\Services\ProductService\Library\ProductFactory;
use Class152\PizzaMamamia\Services\ProductService\ProductService;

class Controller extends AbstractController
{

    public function indexAction()
    {
        $menuService = new MenuService($this->request);
        $controllerMenu = $menuService->getControllerMenu();
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $productService = new ProductService();
        $breadcrumbMenu = $menuService->getBreadcrumbMenu();
        
        $productItem = $productService->getProductItem();


        new TwigRendering(
            'Test/index.twig',
            [
                'controllerName' => 'Test',
                'actionName' => 'index',
                'controllerMenu' => $controllerMenu,
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'productItem'=> $productItem,
                'accountMenu' => $accountMenu,
                'breadcrumbMenu' => $breadcrumbMenu,
            ]
        );

    }

}