<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 07.09.2016
 * Time: 11:27
 */

namespace Class152\PizzaMamamia\Controllers\Campaigns;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Library\TwigRendering;

use Class152\PizzaMamamia\Services\MenuService\MenuService;

class Controller extends AbstractController
{
    
    
    
    public function indexAction()
    {

        $menuService = new MenuService();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu= $menuService->getFooterMenu();
        $mainMenu=   $menuService->getMainMenu();
        $campaignsMenu=   $menuService->getCampaignsMenu();
        
        
        new TwigRendering( 
            'Campaigns/index.twig',
            [
                'controllerName'=>'Campaigns',
                'actionName' => 'index',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
                'campaignsMenu' => $campaignsMenu,  
            ]
        );
   
    }

    public function detailAction()
    {
        $menuService = new MenuService();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu= $menuService->getFooterMenu();
        $mainMenu=   $menuService->getMainMenu();
        $campaignsMenu=   $menuService->getCampaignsMenu();


        new TwigRendering(
		    'Campaigns/detail.twig',
		    [
			    'controllerName'=>'Campaigns',
			    'actionName' => 'detail',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
                'campaignsMenu' => $campaignsMenu,
            ]
	    );

    }

}