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

use Class152\PizzaMamamia\Services\AccountService\AccountService;

use Class152\PizzaMamamia\Services\MenuService\MenuService;

class Controller extends AbstractController
{


    public function indexAction()
    {

        $menuService = new MenuService($this->request);
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $breadcrumbMenu = $menuService->getBreadcrumbMenu();

        $accountService = new AccountService();
        $accountSidebar = $accountService->getSidebarMenu();

        new TwigRendering(
            'Account/index.twig',
            [
                'controllerName' => 'Account',
                'actionName' => 'index',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
                'breadcrumbMenu' => $breadCrumb,
                'accountSidebar'=>$accountSidebar,
            ]
        );

    }


    public function loginAction()
    {

        $menuService = new MenuService($this->request);
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $breadCrumb = $menuService->getBreadcrumbMenu();

        $accountService = new AccountService();
        $accountSidebar = $accountService->getSidebarMenu();

        new TwigRendering(
            'Account/login.twig',
            [
                'controllerName' => 'Account',
                'actionName' => 'login',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
                'breadcrumbMenu' => $breadCrumb,
                'accountSidebar'=>$accountSidebar,
            ]
        );

    }


    public function userconfigAction()
    {

        $menuService = new MenuService($this->request);
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $breadCrumb = $menuService->getBreadcrumbMenu();
        $accountService = new AccountService();
        $accountSidebar = $accountService->getSidebarMenu();

        new TwigRendering(
            'Account/userconfig.twig',
            [
                'controllerName' => 'Account',
                'actionName' => 'userconfig',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
                'breadcrumbMenu' => $breadCrumb,
                'accountSidebar'=>$accountSidebar,
            ]
        );

    }

    public function lostpasswordAction()
    {

        $menuService = new MenuService($this->request);
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $breadCrumb = $menuService->getBreadcrumbMenu();



        new TwigRendering(
            'Account/lostpassword.twig',
            [
                'controllerName' => 'Account',
                'actionName' => 'lostpassword',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
                'breadcrumbMenu' => $breadCrumb,
            ]
        );

    }

    public function registerAction()
    {

        $menuService = new MenuService($this->request);
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $breadCrumb = $menuService->getBreadcrumbMenu();

        new TwigRendering(
            'Account/register.twig',
            [
                'controllerName' => 'Account',
                'actionName' => 'index',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
                'breadcrumbMenu' => $breadcrumbMenu,
            ]
        );


    }

    public function deleteuserAction()
    {

        $menuService = new MenuService($this->request);
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $breadCrumb = $menuService->getBreadcrumbMenu();
        $accountService = new AccountService();
        $accountSidebar = $accountService->getSidebarMenu();

        new TwigRendering(
            'Account/deleteuser.twig',
            [
                'controllerName' => 'Account',
                'actionName' => 'deleteuser',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
                'breadcrumbMenu' => $breadCrumb,
                'accountSidebar'=>$accountSidebar,
            ]
        );

    }

    public function lastordersAction()
    {

        $menuService = new MenuService($this->request);
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $breadCrumb = $menuService->getBreadcrumbMenu();
        $accountService = new AccountService();
        $accountSidebar = $accountService->getSidebarMenu();

        new TwigRendering(
            'Account/lastorders.twig',
            [
                'controllerName' => 'Account',
                'actionName' => 'lastorders',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
                'breadcrumbMenu' => $breadCrumb,
                'accountSidebar'=>$accountSidebar,

            ]
        );

    }

    public function specialoffersAction()
    {

        $menuService = new MenuService($this->request);
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $breadCrumb = $menuService->getBreadcrumbMenu();
        $accountService = new AccountService();
        $accountSidebar = $accountService->getSidebarMenu();

        new TwigRendering(
            'Account/specialoffers.twig',
            [
                'controllerName' => 'Account',
                'actionName' => 'specialoffers',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
                'breadcrumbMenu' => $breadCrumb,
                'accountSidebar'=>$accountSidebar,

            ]
        );

    }

    public function favoritesAction()
    {

        $menuService = new MenuService($this->request);
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $breadCrumb = $menuService->getBreadcrumbMenu();
        $accountService = new AccountService();
        $accountSidebar = $accountService->getSidebarMenu();

        new TwigRendering(
            'Account/favorites.twig',
            [
                'controllerName' => 'Account',
                'actionName' => 'favorites',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
                'breadcrumbMenu' => $breadCrumb,
                'accountSidebar'=>$accountSidebar,

            ]
        );

    }

}