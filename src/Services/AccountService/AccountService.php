<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 14.09.2016
 * Time: 10:20
 */

namespace Class152\PizzaMamamia\Services\AccountService;

use Class152\PizzaMamamia\Http\Request;
use Class152\PizzaMamamia\Services\AccountService\Library\AccountSidebarFactory;
use Class152\PizzaMamamia\Services\MenuService\Library\MenuItemList;

use Class152\PizzaMamamia\Services\SessionService\Library\UserAccount;
use Class152\PizzaMamamia\Services\SessionService\SessionService;
use Class152\PizzaMamamia\Services\AccountService\Exceptions\NotLoggedInException;

class AccountService
{
    /** @var SessionService */
    private $sessionService;

    /** @var Request */
 //   private $request;

    public function __construct( SessionService $sessionService )
    {
        $this->sessionService = $sessionService;
        $userAccount = $sessionService->getUserAccount();
    /*   if( ! $userAccount->isLoggedIn() )
        {
            throw new NotLoggedInException();
        }*/
        //$this->request = $request;
    }

    public function getUser(): UserAccount
    {
       return $this->sessionService->getUserAccount();
    }

    public function getSidebarMenu() : MenuItemList
    {
        $controllerMenuFactory = new AccountSidebarFactory();
        return $controllerMenuFactory->getAccountSidebarMenu();
    }

}