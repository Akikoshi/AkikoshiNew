<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 13.09.2016
 * Time: 09:28
 */

namespace Class152\PizzaMamamia\Services\MenuService\Library;


class FooterMenuFactory
{
    /** @var MenuItemList */
    public $controllerFooter;

    public function __construct()
    {
        $this->controllerFooter = new MenuItemList();

        $this->controllerFooter->addItem(
            new MenuItem( 'AGB', '/informations/gbt' )
        );

        $this->controllerFooter->addItem(
            new MenuItem( 'Impressum', '/informations/contact' )
        );

        $this->controllerFooter->addItem(
            new MenuItem( 'Kontakte', '/informations/imprint' )
        );

        $this->controllerFooter->addItem(
            new MenuItem( 'Qualitätsrichtlinien', '/informations/quality' )
        );

    }

    /** @var MenuItemList */
    public function getControllerFooter() : MenuItemList
    {
        return $this->controllerFooter;
    }
}