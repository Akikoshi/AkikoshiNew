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

class Controller extends AbstractController
{
    public function indexAction()
    {
        $menuService = new MenuService();
        $mainMenu = $menuService->getMainMenu();
        $footerMenu = $menuService->getFooterMenu();
        $accountMenu = $menuService->getAccountMenu();

        new TwigRendering(
            'Shoppingcart/index.twig',
            [
                'controllerName'=>'Shoppingcart',
                'actionName' => 'index',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
            ]
        );
    }
}