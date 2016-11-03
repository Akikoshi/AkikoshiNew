<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 24.10.2016
 * Time: 08:39
 */

namespace Class152\PizzaMamamia\Services\ShoppingCartService;


use Class152\PizzaMamamia\Services\ShoppingCartService\Factory\ShoppingCartFactory;
use Class152\PizzaMamamia\Services\ShoppingCartService\Library\ShoppingCartList;

class ShoppingCartService
{

    /**
     * @return ShoppingCartList
     */
    public function getShoppingCart() : ShoppingCartList
    {
        $factory = new ShoppingCartFactory();
        //var_dump( $factory->getAggregate() ); die();
        return $factory->getAggregate();
    }
}