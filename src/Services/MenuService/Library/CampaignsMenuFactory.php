<?php
/**
 * Created by PhpStorm.
 * User: RauchR
 * Date: 13.09.2016
 * Time: 14:29
 */

namespace Class152\PizzaMamamia\AbstractClasses\Services\MenuService\Library;

namespace Class152\PizzaMamamia\Services\MenuService\Library;


class campaignsMenuFactory
{
    /** @var MenuItemList */
    public $campaignsMenu;

    public function __construct()
    {
        $this->campaignsMenu = new MenuItemList();

        $this->campaignsMenu->addItem(
            new MenuItem('Campaigns1', '/Campaigns/index')
        );

        $this->campaignsMenu->addItem(
            new MenuItem('Campaigns2', '/Campaigns/index')
        );

    }

    /** @var MenuItemList */
    public function getCampaignsMenu() : MenuItemList
    {
        return $this->campaignsMenu;
    }

}