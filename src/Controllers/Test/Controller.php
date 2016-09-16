<?php
/**
 * Created by PhpStorm.
 * User: cbiedermann
 * Date: 07.09.2016
 * Time: 14:19
 */

namespace Class152\PizzaMamamia\Controllers\Test;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Library\Price;
use Class152\PizzaMamamia\Library\TwigRendering;
use Class152\PizzaMamamia\Services\MenuService\MenuService;
use Class152\PizzaMamamia\Services\ProductListService\ProductListService;

class Controller extends AbstractController
{

    public function indexAction()
    {
        $menuService = new MenuService($this->request);
        $controllerMenu = $menuService->getControllerMenu();
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $productService = new ProductListService();
        $breadcrumbMenu = $menuService->getBreadcrumbMenu();
        
        $productList = $productService->getProductList();

// Test zur Price(); Klasse Berechnungsbeispiel
//        $test = new Price(15,19);
//        var_dump($test);
//        $test->reduceToPrice( 3 );
//        var_dump($test);
//        $test->reduceInPercent( 20 );
//        var_dump($test);
//        die();

        new TwigRendering(
            'Test/index.twig',
            [
                'controllerName' => 'Test',
                'actionName' => 'index',
                'controllerMenu' => $controllerMenu,
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                '$productList'=> $productList,
                'accountMenu' => $accountMenu,
                'breadcrumbMenu' => $breadcrumbMenu,
            ]
        );

    }

}