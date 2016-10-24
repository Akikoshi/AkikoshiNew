<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 24.10.2016
 * Time: 13:27
 */

namespace Class152\PizzaMamamia\Services\ShoppingCartService\Factory;


use Class152\PizzaMamamia\Services\ProductDetailService\Library\MediaFile;
use Class152\PizzaMamamia\Services\ShoppingCartService\Library\ShoppingCartItem;
use Class152\PizzaMamamia\Services\ShoppingCartService\Library\ShoppingCartList;
use Class152\PizzaMamamia\Services\ShoppingCartService\Repository\ShoppingCartRepository;

class ShoppingCartFactory
{
    /** @var ShoppingCartRepository */
    private $repository;

    /** @var array */
    private $shoppingCartItems = [];

    public function __construct()
    {
        $this->repository = new ShoppingCartRepository();
    }

    private function loadShoppingCartItems()
    {
        $this->shoppingCartItems[] = [];
    }
    
    private function packShoppingCartItems()
    {
        foreach( $this->shoppingCartItems as $key => $item )
        {
            $this->shoppingCartItems[$key] = new ShoppingCartItem(
                // TODO: just Fakedata

                5,                                  //ID
                'Pizza Tonno',                      //Name
                'MediaFile',                        //thumb
                'Fischpizza mhh lecker',            //description
                new ShoppingCartItemVariantList(),  //variants
                3,                                  //amount
                10,                                 //maxamount
                false,                              //ReducedByCampaign
                new ShoppingCartLink(),             //ShoppingCartLink $removeItemUrl
                new ShoppingCartLink(),             //ShoppingCartLink $increaseItemUrl
                new ShoppingCartLink()              //ShoppingCartLink $decreaseItemUrl
            );
        }
    }

    /**
     * @return ShoppingCartList
     */
    public function getAggregate() : ShoppingCartList
    {
        return new ShoppingCartList( $this->shoppingCartItems );
    }
    
}