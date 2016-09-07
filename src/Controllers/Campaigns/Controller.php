<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 07.09.2016
 * Time: 11:27
 */

namespace Class152\PizzaMamamia\AbstractClasses\Controllers\Campaigns;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Library\TwigRendering;

class Controller extends AbstractController
{
    public function indexAction()
    {
        new TwigRendering(
            'Campaigns/index.twig',
            [
                'controllerName'=>'Campaigns',
                'actionName' => 'index',
            ]
        );
    }
}