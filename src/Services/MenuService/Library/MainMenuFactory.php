<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 09:40
 */

namespace Class152\PizzaMamamia\Services\MenuService\Library;


use Class152\PizzaMamamia\Services\MenuService\Repositories\Entities\MenuEntity;
use Class152\PizzaMamamia\Services\MenuService\Repositories\MenuRepository;

class MainMenuFactory
{
    private $mainMenu;
    
    public function __construct()
    {

    	  $repository = new MenuRepository();

	      $data = $repository->getMenuByName('mainMenu');
	      // var_dump($data);


	      $this->mainMenu = new MenuItemList();

	      $data = $repository->getMenuesByParentIds([
	      	$data->getId(),
	      ]);

	      /** @var MenuEntity $elem */
	    foreach( $data as $elem )
	      {
	      	$this->mainMenu->addItem( new MenuItem( $elem->getName(),$elem->getUrl() ) );
	      }

	      return;


        $this->mainMenu = new MenuItemList();
        
        $this->mainMenu->addItem(
            new MenuItem('Aktionen', '/campaigns/index')
        );

        $subMenu = new MenuItemList();
        $subMenu->addItem(
            new MenuItem('Alle einsehnen', '/productlist/index')
        );
        
        $subMenu->addItem(
            new MenuItem('Vegetarische Pizzas', '/productlist/index')
        );
        
        $subMenu->addItem(
            new MenuItem('Klassiker', '/productlist/index')
        );

        $this->mainMenu->addItem(
            new MenuItem('Pizza', '/productlist/index',
                $subMenu)
        );
//---------------------------------------------------------------------------------------------------------------------------
        $subMenu = new MenuItemList();
        $subMenu->addItem(
            new MenuItem('Alle einsehnen', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Vegetarische', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Klassiker', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Überbackenes', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Saisonal', '/productlist/index')
        );

        $this->mainMenu->addItem(
            new MenuItem('Nudeln', '/productlist/index',
                $subMenu)
        );
//---------------------------------------------------------------------------------------------------------------------------
        $subMenu = new MenuItemList();
        $subMenu->addItem(
            new MenuItem('Alle einsehnen', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Anti Pasti', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Klassiker', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Burger', '/productlist/index')
        );

        $this->mainMenu->addItem(
            new MenuItem('Fingerfood', '/productlist/index',
                $subMenu)
        );
//---------------------------------------------------------------------------------------------------------------------------
        $subMenu = new MenuItemList();
        $subMenu->addItem(
            new MenuItem('Alle einsehnen', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Vegetarisch', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Klassiker', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Laktosefrei', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Warme', '/productlist/index')
        );

        $this->mainMenu->addItem(
            new MenuItem('Salat', '/productlist/index',
                $subMenu)
        );
//---------------------------------------------------------------------------------------------------------------------------
        $subMenu = new MenuItemList();
        $subMenu->addItem(
            new MenuItem('Alle einsehnen', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Eis', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Klassiker', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Laktosefrei', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Warme', '/productlist/index')
        );

        $this->mainMenu->addItem(
            new MenuItem('Desserts', '/productlist/index',
                $subMenu)
        );
//---------------------------------------------------------------------------------------------------------------------------
        $subMenu = new MenuItemList();
        $subSubMenu = new MenuItemList();
        $subMenu->addItem(
            new MenuItem('Alle einsehnen', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Nicht Alkoholische', '/productlist/index')
        );

        $subSubMenu->addItem(
            new MenuItem('Koffeinhaltig', '/productlist/index')
        );

        $subSubMenu->addItem(
            new MenuItem('Koffeinfrei', '/productlist/index')
        );

        $subMenu->addItem(
            new MenuItem('Alkoholische', '/productlist/index')
        ); 

        $this->mainMenu->addItem(
            new MenuItem('Getränke', '/productlist/index',
                $subMenu)
        );
    }
    
    public function getMainMenu()
    {
        return $this->mainMenu;
    }
}