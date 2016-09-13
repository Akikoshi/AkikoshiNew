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
            new MenuItem('Einloggen', '/account/index')
        );

        $this->accountmenu->addItem(
            new MenuItem('Ausloggen', '/account/index')
        );

        $this->accountmenu->addItem(
            new MenuItem('registrieren', '/account/index')
        );

        $this->accountmenu->addItem(
            new MenuItem('Passwort vergessen', '/account/index')
        );

        $this->accountmenu->addItem(
            new MenuItem('Passwort ändern', '/account/index')
        );

        $this->accountmenu->addItem(
            new MenuItem('Profildaten bearbeiten', '/account/index')
        );

        $this->accountmenu->addItem(
            new MenuItem('Adressen ändern', '/account/index')
        );

        $this->accountmenu->addItem(
            new MenuItem('Profildaten bearbeiten', '/account/index')
        );

        $this->accountmenu->addItem(
            new MenuItem('Kundenkonto löschen', '/account/index')
        );

        $this->accountmenu->addItem(
            new MenuItem('vergangene Bestellungen', '/account/index')
        );

        $this->accountmenu->addItem(
            new MenuItem('Kundensonderangebote anzeigen', '/account/index')
        );

        $this->accountmenu->addItem(
            new MenuItem('Favoriten', '/account/index')
        );

        $this->accountmenu->addItem(
            new MenuItem('Favoriten löschen', '/account/index')
        );

        $this->accountmenu->addItem(
            new MenuItem('Favoriten in den Warenkorb', '/account/index')
        );


    }

    /** @var MenuItemList */
    public function getaccountmenu() : MenuItemList
    {
        return $this->accountmenu;
    }

}