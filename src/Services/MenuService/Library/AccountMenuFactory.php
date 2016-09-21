<?php
/**
 * Created by PhpStorm.
 * User: RauchR
 * Date: 13.09.2016
 * Time: 09:32
 */


namespace Class152\PizzaMamamia\Services\MenuService\Library;


class AccountMenuFactory
{
    /** @var MenuItemList */
    public $accountMenu;

    public function __construct()
    {
        $this->accountmenu = new MenuItemList();

        $this->accountmenu->addItem(
            new MenuItem('Einloggen', '/account/login')
        );

        $this->accountmenu->addItem(
            new MenuItem('Ausloggen', '/home/index')
        );

        $this->accountmenu->addItem(
            new MenuItem('registrieren', '/account/register')
        );

        $this->accountmenu->addItem(
            new MenuItem('Passwort vergessen', '/account/index')
        );


    }

    /** @var MenuItemList */
    public function getaccountmenu() : MenuItemList
    {
        return $this->accountmenu;
    }

}