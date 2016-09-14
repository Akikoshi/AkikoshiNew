<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 07.09.2016
 * Time: 11:36
 */

namespace Class152\PizzaMamamia\Controllers\Productdetails;


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
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        
        $productService = new ProductService();
        $productItem = $productService->getProductItem();
        $breadCrumb = $menuService->getBreadcrumbMenu();

        new TwigRendering(
            'Productdetails/index.twig',
            [
                'controllerName'=>'Productdetails',
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