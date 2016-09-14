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

class AccountService
{

    /** @var Request */
 //   private $request;

    public function __construct()
    {
        //
        //$this->request = $request;
    }

    public function getSidebarMenu() : MenuItemList
    {
        $controllerMenuFactory = new AccountSidebarFactory();
        return $controllerMenuFactory->getAccountSidebarMenu();
    }

}