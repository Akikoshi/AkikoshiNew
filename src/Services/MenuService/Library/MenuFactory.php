<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 20.09.2016
 * Time: 15:21
 */

namespace Class152\PizzaMamamia\Services\MenuService\Library;


use Class152\PizzaMamamia\Services\MenuService\Repositories\Entities\MenuEntity;
use Class152\PizzaMamamia\Services\MenuService\Repositories\MenuRepository;

class MenuFactory
{
	/**
	 * @var MenuItemList
	 */
	private $menu;

	/**
	 * @var MenuRepository
	 */
	private $repository;

	/**
	 * @var string
	 */
	private $menuName;


	public function __construct( string $menuName )
	{
		$this->repository = new MenuRepository();
		$this->menu = new MenuItemList();

		if ( '' == $menuName ) {
			return;
		}

		$this->menuName = $menuName;
		$this->generateMenu();
	}

	public function getMenu() : MenuItemList
	{
		return $this->menu;
	}


	private function generateMenu()
	{
		$sqlResult = $this->repository->getMenuByName( $this->menuName );

		$this->menu = $this->getSubMenuItems( $sqlResult->getId() );
	}

	/**
	 * @param int $mId
	 * @return MenuItemList
	 * Recursive function to get all menu- and sub-menu-items
	 */
	private function getSubMenuItems( int $mId ) : MenuItemList
	{
		$result = new MenuItemList();

		/* got all sub-elements of this menu-item (id) */
		$sqlResult = $this->repository->getMenuesByParentIds( [ $mId ] );

		/** @var MenuEntity $elem */
		foreach ( $sqlResult as $elem ) {
			$id = $elem->getId();
			if ( $id == $elem->getParentID() ) {     		// Jump over infinity-loop-condition
				continue;
			}
			$subItems = $this->getSubMenuItems( $id );      // Check and generate the Sub-ItemList

			if ( empty( $subItems ) ) {                     // No subitems => no ItemList for this Entry
				$entry = new MenuItem(
					$elem->getName(),
					$elem->getUrl()
				);
			}
			else {                                        	// SubItems exists => save the ItemList
				$entry = new MenuItem(
					$elem->getName(),
					$elem->getUrl(),
					$subItems
				);
			}
			$result->addItem( $entry );
		}
		return $result;
	}
}