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

class Controller extends AbstractController
{

    public function indexAction()
    {
        $menuService = new MenuService();
        $mainMenu = $menuService->getMainMenu();
        $footerMenu = $menuService->getFooterMenu();
        $accountMenu = $menuService->getAccountMenu();


        new TwigRendering(
            'Test/index.twig',
            [
                'controllerName' => 'Test',
                'actionName' => 'index',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
            ]
        );

    }

}