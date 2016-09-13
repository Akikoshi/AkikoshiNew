<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 07.09.2016
 * Time: 11:27
 */

namespace Class152\PizzaMamamia\Controllers\Account;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Library\TwigRendering;
use Class152\PizzaMamamia\Services\MenuService\MenuService;

class Controller extends AbstractController
{


    public function indexAction()
    {

        $menuService = new MenuService();
        $accountMenu = $menuService->getAccountMenu();
        $mainMenu = $menuService->getMainMenu();
        $footerMenu = $menuService->getFooterMenu();
        

        new TwigRendering(
            'Test/index.twig',
            [
                'controllerName'=>'Account',
                'actionName' => 'index',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
            ]
        );

    }

}