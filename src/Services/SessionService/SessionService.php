<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 14.09.2016
 * Time: 10:20
 */

namespace Class152\PizzaMamamia\Services\SessionService;

use Class152\PizzaMamamia\Http\Request;
use Class152\PizzaMamamia\Services\AccountService\Library\AccountSidebarFactory;
use Class152\PizzaMamamia\Services\MenuService\Library\MenuItemList;
use Class152\PizzaMamamia\Services\SessionService\Library\UserAccount;

class SessionService
{

    /** @var Request */
 //   private $request;

    public function __construct()
    {
        //
        //$this->request = $request;
    }

    public function getUserAccount() : UserAccount
    {
        return new UserAccount();
    }

    public function getShoppingCart() : MenuItemList
    {
        
     //   return $controllerMenuFactory->getAccountSidebarMenu();
    }
}