<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 07.09.2016
 * Time: 10:45
 */

namespace Class152\PizzaMamamia\Controllers\Productlist;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Library\TwigRendering;
use Class152\PizzaMamamia\Services\MenuService\MenuService;
use Class152\PizzaMamamia\Services\ProductService\ProductService;
use Class152\PizzaMamamia\Services\StartPageService\StartPageService;

class Controller extends AbstractController
{
    
    public function indexAction(){
        $menuService = new MenuService($this->request);
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $breadCrumb = $menuService->getBreadcrumbMenu();
        $productService = new ProductService();
        $productItem = $productService->getProductItem();

        new TwigRendering(
            'ProductList/index.twig',
            [
                'controllerName'=>'ProductList',
                'actionName' => 'index',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
                'productItem'=> $productItem,
                'breadcrumbMenu' => $breadCrumb,
            ]
        );
    }
}


