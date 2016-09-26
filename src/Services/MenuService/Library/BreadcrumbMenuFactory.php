<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 13.09.2016
 * Time: 14:01
 */

namespace Class152\PizzaMamamia\Services\MenuService\Library;


use Class152\PizzaMamamia\Http\Request;

class BreadcrumbMenuFactory
{
	/** @var MenuItemList */
	private $breadcrumbMenu;

	/** @var Request */
	private $request;

	/** @var string */
	private $controllerName;

	/** @var string */
	private $actionName;

	/**
	 * BreadcrumbMenuFactory constructor.
	 * @param Request $request
	 */
	public function __construct( Request $request )
	{
		$this->request = $request;
		$this->breadcrumbMenu = new MenuItemList();
		$this->getControllerName();
		$this->getNonIndexActionName();
		$this->generateMenuItemList();
	}

	/**
	 * @return MenuItemList
	 */
	public function getBreadcrumbMenu() : MenuItemList
	{
		return $this->breadcrumbMenu;
	}


	private function generateMenuItemList()
	{
		if ( strtolower( $this->controllerName ) != 'home' ) {
			$menuItem = new MenuItem( 'Home', '/' );
			$this->breadcrumbMenu->addItem( $menuItem );
		}
		if ( $this->actionName == "" ) {
			$menuItem = new MenuItem( $this->controllerName, '' );
			$this->breadcrumbMenu->addItem( $menuItem );
		}
		else {
			$menuItem = new MenuItem( $this->controllerName, '/' . $this->controllerName );
			$this->breadcrumbMenu->addItem( $menuItem );
			$menuItem = new MenuItem( $this->actionName, '' );
			$this->breadcrumbMenu->addItem( $menuItem );
		}
	}


	private function getControllerName()
	{
		$this->controllerName = $this->request->getControllerName();
	}

	private	function getNonIndexActionName()
	{
		$oActionName = $this->request->getActionName();
		if ( $oActionName != "index" ) {
			$this->actionName = $oActionName;
		}
		else {
			$this->actionName = "";
		}
	}
}