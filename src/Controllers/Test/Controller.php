<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 07.09.2016
	 * Time: 14:19
	 */

namespace Class152\PizzaMamamia\Controllers\Test;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Library\ControllerMenu;
use Class152\PizzaMamamia\Library\TwigRendering;
use Class152\PizzaMamamia\Services\MenuService\MenuService;

class Controller extends AbstractController
{

    public function indexAction()
    {
        $menuService = new MenuService();
        $controllerMenu = $menuService->getControllerMenu();
        $footerMenu = $menuService->getFooterMenu();


        new TwigRendering(
            'Test/index.twig',
            [
                'controllerName' => 'Test',
                'actionName' => 'index',
                'mainMenu' => $controllerMenu,
                'footerMenu' => $footerMenu,
            ]
        );

    }

}