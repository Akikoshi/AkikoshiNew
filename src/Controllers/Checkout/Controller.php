<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 07.09.2016
 * Time: 10:45
 */

namespace Controllers\Checkout;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Library\TwigRendering;

class Controller extends AbstractController
{

    public function indexAction(){
        new TwigRendering(
            'Checkout/index.twig',
            [
                'controllerName'=>'Checkout',
                'actionName' => 'index',
            ]
        );
    }
    
    public function confirmOrder(){
        new TwigRendering(
            'Checkout/confirmOrder.twig',
            [
                'controllerName'=>'Checkout',
                'actionName' => 'confirmOrder',
            ]
        );
    }

}


