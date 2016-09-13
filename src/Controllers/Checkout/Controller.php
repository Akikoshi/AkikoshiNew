<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 07.09.2016
 * Time: 10:45
 */

namespace Class152\PizzaMamamia\Controllers\Checkout;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Library\TwigRendering;
use Class152\PizzaMamamia\Services\MenuService\MenuService;

class Controller extends AbstractController
{




    public function indexAction(){
        $menuService = new MenuService();
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        
        new TwigRendering(
            'Checkout/index.twig',
            [
                'controllerName'=>'Checkout',
                'actionName' => 'index',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
            ]
        );
    }
    
    public function confirmorderAction(){
        +$menuService = new MenuService();
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        new TwigRendering(
            'Checkout/confirmOrder.twig',
            [
                'controllerName'=>'Checkout',
                'actionName' => 'confirmOrder',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
            ]
        );
    }

}


