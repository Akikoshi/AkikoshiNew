<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 07.09.2016
 * Time: 11:23
 */

namespace Controllers\Configurator;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Library\TwigRendering;

class Controller extends AbstractController
{
    public function indexAction()
    {
        new TwigRendering(
            'Configurator/index.twig',
            [
                'controllerName'=>'Configurator',
                'actionName' => 'index',
            ]
        );
    }
}