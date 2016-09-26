<?php
/**
 * Created by PhpStorm.
 * User: RauchR
 * Date: 13.09.2016
 * Time: 09:32
 */


namespace Class152\PizzaMamamia\Services\AccountService\Library;

use Class152\PizzaMamamia\Services\MenuService\Library\MenuItemList;
use Class152\PizzaMamamia\Services\MenuService\Library\MenuItem;

class AccountSidebarFactory
{
    /** @var MenuItemList */
    public $accountMenu;

	/**
	 * AccountSidebarFactory constructor.
	 */
	public function __construct()
    {
        $this->accountmenu = new MenuItemList();


        $this->accountmenu->addItem(
            new MenuItem('Kundensonderangebote anzeigen', '/account/specialoffers')
        );

        $this->accountmenu->addItem(
            new MenuItem('Favoriten', '/account/favorites')
        );
        
        $this->accountmenu->addItem(
            new MenuItem('vergangene Bestellungen', '/account/lastorders')
        );
        
        $this->accountmenu->addItem(
            new MenuItem('Profildaten bearbeiten', '/account/userconfig')
        );

        $this->accountmenu->addItem(
            new MenuItem('Kundenkonto löschen', '/account/deleteuser')
        );
        $this->accountmenu->addItem(
            new MenuItem('Ausloggen', '/home/index')
        );


    }

	/**
	 * @return \Class152\PizzaMamamia\Services\MenuService\Library\MenuItemList
	 */
    public function getAccountSidebarMenu() : MenuItemList
    {
        return $this->accountmenu;
    }

}