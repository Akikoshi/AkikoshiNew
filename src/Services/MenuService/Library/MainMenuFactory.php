<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 09:40
 */

namespace Class152\PizzaMamamia\Services\MenuService\Library;


class MainMenuFactory
{
    private $mainMenu;
    
    public function __construct()
    {
        $this->mainMenu = new MenuItemList();
        
        $this->mainMenu->addItem(
            new MenuItem('Aktionen', '/campaigns/index')
        );

        $subMenu = new MenuItemList();
        $subMenu->addItem(
            new MenuItem('Alle einsehnen','/home/index?typ=1')
        );
        
        $subMenu->addItem(
            new MenuItem('Vegetarische Pizzas', '/home/index?typ=1&option=veg')
        );
        
        $subMenu->addItem(
            new MenuItem('Klassiker','/home/index?typ=1&option=kla')
        );

        $this->mainMenu->addItem(
            new MenuItem('Pizza','/home/index?typ=1',
                $subMenu)
        );
//---------------------------------------------------------------------------------------------------------------------------
        $subMenu = new MenuItemList();
        $subMenu->addItem(
            new MenuItem('Alle einsehnen','/home/index?typ=2')
        );

        $subMenu->addItem(
            new MenuItem('Vegetarische Burger', '/home/index?typ=2&option=veg')
        );

        $subMenu->addItem(
            new MenuItem('Klassiker','/home/index?typ=2&option=kla')
        );

        $this->mainMenu->addItem(
            new MenuItem('Burger','/home/index?typ=1',
                $subMenu)
        );
    }
    
    public function getMainMenu()
    {
        return $this->mainMenu;
    }
}