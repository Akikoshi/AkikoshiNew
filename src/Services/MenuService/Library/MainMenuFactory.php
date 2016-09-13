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
            new MenuItem('Vegetarische', '/home/index?typ=2&option=veN')
        );

        $subMenu->addItem(
            new MenuItem('Klassiker','/home/index?typ=2&option=klN')
        );

        $subMenu->addItem(
            new MenuItem('Überbackenes','/home/index?typ=2&option=ueN')
        );

        $subMenu->addItem(
            new MenuItem('Saisonal','/home/index?typ=2&option=seN')
        );

        $this->mainMenu->addItem(
            new MenuItem('Nudeln','/home/index?typ=1',
                $subMenu)
        );
//---------------------------------------------------------------------------------------------------------------------------
        $subMenu = new MenuItemList();
        $subMenu->addItem(
            new MenuItem('Alle einsehnen','/home/index?typ=2')
        );

        $subMenu->addItem(
            new MenuItem('Anti Pasti', '/home/index?typ=2&option=Veg')
        );

        $subMenu->addItem(
            new MenuItem('Klassiker','/home/index?typ=2&option=kla')
        );

        $subMenu->addItem(
            new MenuItem('Burger','/home/index?typ=2&option=bur')
        );

        $this->mainMenu->addItem(
            new MenuItem('Fingerfood','/home/index?typ=1',
                $subMenu)
        );
//---------------------------------------------------------------------------------------------------------------------------
        $subMenu = new MenuItemList();
        $subMenu->addItem(
            new MenuItem('Alle einsehnen','/home/index?typ=2')
        );

        $subMenu->addItem(
            new MenuItem('Vegetarisch', '/home/index?typ=2&option=Veg')
        );

        $subMenu->addItem(
            new MenuItem('Klassiker','/home/index?typ=2&option=kla')
        );

        $subMenu->addItem(
            new MenuItem('Laktosefrei','/home/index?typ=2&option=lak')
        );

        $subMenu->addItem(
            new MenuItem('Warme','/home/index?typ=2&option=war')
        );

        $this->mainMenu->addItem(
            new MenuItem('Salat','/home/index?typ=1',
                $subMenu)
        );
//---------------------------------------------------------------------------------------------------------------------------
        $subMenu = new MenuItemList();
        $subMenu->addItem(
            new MenuItem('Alle einsehnen','/home/index?typ=2')
        );

        $subMenu->addItem(
            new MenuItem('Eis', '/home/index?typ=2&option=Veg')
        );

        $subMenu->addItem(
            new MenuItem('Klassiker','/home/index?typ=2&option=kla')
        );

        $subMenu->addItem(
            new MenuItem('Laktosefrei','/home/index?typ=2&option=lak')
        );

        $subMenu->addItem(
            new MenuItem('Warme','/home/index?typ=2&option=war')
        );

        $this->mainMenu->addItem(
            new MenuItem('Desserts','/home/index?typ=1',
                $subMenu)
        );
//---------------------------------------------------------------------------------------------------------------------------
        $subMenu = new MenuItemList();
        $subSubMenu = new MenuItemList();
        $subMenu->addItem(
            new MenuItem('Alle einsehnen','/home/index?typ=2')
        );

        $subMenu->addItem(
            new MenuItem('Nicht Alkoholische','/home/index?typ=2&option=nal')
        );

        $subSubMenu->addItem(
            new MenuItem('Koffeinhaltig','/home/index?typ=3&option=kof')
        );

        $subSubMenu->addItem(
            new MenuItem('Koffeinfrei','/home/index?typ=3&option=koff')
        );

        $subMenu->addItem(
            new MenuItem('Alkoholische','/home/index?typ=2&option=alk')
        );

        $this->mainMenu->addItem(
            new MenuItem('Getränke','/home/index?typ=1',
                $subMenu)
        );
    }
    
    public function getMianMenu()
    {
        return $this->mainMenu;
    }
}