<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 07.09.2016
 * Time: 11:36
 */

namespace Class152\PizzaMamamia\Controllers\Productdetails;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Library\TwigRendering;

class Controller extends AbstractController
{
    public function indexAction()
    {
        new TwigRendering(
            'Productdetails/index.twig',
            [
                'controllerName'=>'Productdetails',
                'actionName' => 'index',
            ]
        );
    }
}