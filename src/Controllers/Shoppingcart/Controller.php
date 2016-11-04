<?php
/**
 * Created by PhpStorm.
 * User: jaehnertp
 * Date: 07.09.2016
 * Time: 10:51
 */

namespace Class152\PizzaMamamia\Controllers\Shoppingcart;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Library\TwigRendering;
use Class152\PizzaMamamia\Services\MenuService\MenuService;
use Class152\PizzaMamamia\Services\ShoppingCartService\ShoppingCartService;

class Controller extends AbstractController
{
    public function indexAction()
    {
        $menuService = new MenuService($this->request);
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $breadcrumbMenu = $menuService->getBreadcrumbMenu();

        $shoppingCartService = new ShoppingCartService();
        $shoppingCart = $shoppingCartService->getShoppingCart();

        // var_dump( $shoppingCart ); die();
        
        new TwigRendering(
            'Shoppingcart/index.twig',
            [
                'controllerName'=>'Shoppingcart',
                'actionName' => 'index',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
                'breadcrumbMenu' => $breadcrumbMenu,
                'shoppingCart' => $shoppingCart,
            ]
        );
    }
}