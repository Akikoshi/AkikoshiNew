<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 07.09.2016
 * Time: 11:27
 */

namespace Class152\PizzaMamamia\Controllers\Account;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Http\Request;
use Class152\PizzaMamamia\Library\TwigRendering;
use Class152\PizzaMamamia\Services\AccountService\AccountService;
use Class152\PizzaMamamia\Services\SessionService\SessionService;
use Class152\PizzaMamamia\Services\MenuService\MenuService;
use Class152\PizzaMamamia\Services\AccountService\Exceptions\NotLoggedInException;


class Controller extends AbstractController
{
    /** @var AccountService */
    private $accountService;

    /** @var MenuService */
    private $mainMenu;
    private $accountMenu;
    private $footerMenu;
    private $breadCrumb;
    private $accountSidebar;
    private $controllerName;

    public function __construct(Request $request, SessionService $sessionService)
    {
        try {
            $this->accountService = new AccountService( $sessionService );
        }
        catch ( NotLoggedInException $exception )
        {
            new TwigRendering(
                'Account/login.twig',
                [
    
                ]
            );
            return;
        }

        $this->controllerName='Account';
        $menuService = new MenuService($request);
        $this->mainMenu = $menuService->getMainMenu();
        $this->accountMenu = $menuService->getAccountMenu();
        $this->footerMenu = $menuService->getFooterMenu();
        $this->breadCrumb =$menuService->getBreadcrumbMenu();
        $this->accountSidebar = $this->accountService->getSidebarMenu();
        parent::__construct($request);
    }


    private function getTwigRendering($actionName)
    {

        new TwigRendering(
            $this->controllerName.'/'.$actionName.'.twig',
            [
                'controllerName' => $this->controllerName,
                'actionName' => $actionName,
                'mainMenu' => $this->mainMenu,
                'footerMenu' => $this->footerMenu,
                'accountMenu' => $this->accountMenu,
                'breadcrumbMenu' => $this->breadCrumb,
                'accountSidebar'=>$this->accountSidebar,
                'userAccount' => $this->accountService->getUser(),
            ]
        );

    }


    public function indexAction()
    {
        $this->getTwigRendering('index');
        
        
    }


    public function loginAction()
    {
        $this->getTwigRendering('login');

    }


    public function userconfigAction()
    {
        $this->getTwigRendering('userconfig');
    }

    public function lostpasswordAction()
    {

        $this->getTwigRendering('lostpassword');

    }

    public function registerAction()
    {

        $this->getTwigRendering('registerAction');

    }

    public function deleteuserAction()
    {

        $this->getTwigRendering('deleteuserAction');


    }

    public function lastordersAction()
    {


        $this->getTwigRendering('lastordersAction');

    }

    public function specialoffersAction()
    {

        $this->getTwigRendering('specialoffers');

    }

    public function favoritesAction()
    {
        $this->getTwigRendering('favoritesAction');

    }

}