<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 24.10.2016
 * Time: 13:27
 */

namespace Class152\PizzaMamamia\Services\ShoppingCartService\Factory;


use Class152\PizzaMamamia\Services\ProductDetailService\Library\MediaFile;
use Class152\PizzaMamamia\Services\ProductDetailService\Library\Price;
use Class152\PizzaMamamia\Services\ShoppingCartService\Library\ShoppingCartItem;
use Class152\PizzaMamamia\Services\ShoppingCartService\Library\ShoppingCartItemVariant;
use Class152\PizzaMamamia\Services\ShoppingCartService\Library\ShoppingCartItemVariantList;
use Class152\PizzaMamamia\Services\ShoppingCartService\Library\ShoppingCartLink;
use Class152\PizzaMamamia\Services\ShoppingCartService\Library\ShoppingCartList;
use Class152\PizzaMamamia\Services\ShoppingCartService\Library\ShoppingCartPrice;
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
        $this->loadShoppingCartItems();
        $this->packShoppingCartItems();
        $this->loadVariants();
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

                '5',                                //ID
                'Pizza Tonno',                      //Name
                'MediaFile',                        //thumb
                'Fischpizza vom feinsten aus dem Meer',            //description
                new ShoppingCartItemVariantList($this->loadVariants()),  //variants
                3,                                  //amount
                10,                                 //maxamount
                false,                              //ReducedByCampaign
                new ShoppingCartLink('a','bla1'),    //ShoppingCartLink $removeItemUrl
                new ShoppingCartLink('b','bla2'),    //ShoppingCartLink $increaseItemUrl
                new ShoppingCartLink('c','bla3')     //ShoppingCartLink $decreaseItemUrl
            );
        }
    }

    private function loadVariants()
    {
        $variant = new ShoppingCartItemVariant(
            '3',
            '',
            new ShoppingCartPrice( 12.20, 19 ),
            new ShoppingCartLink('/productdetails/index/3','Posten entfernen'),
            new ShoppingCartLink('/shoppingcart/index/3','+1'),
            new ShoppingCartLink('/productconfigurator/index/3','-1'),
            false
        );
        return [$variant];
    }

    /**
     * @return ShoppingCartList
     */
    public function getAggregate() : ShoppingCartList
    {
        return new ShoppingCartList( $this->shoppingCartItems );
    }
    
}