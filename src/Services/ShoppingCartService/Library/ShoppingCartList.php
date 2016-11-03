<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 24.10.2016
 * Time: 09:01
 */

namespace Class152\PizzaMamamia\Services\ShoppingCartService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Interfaces\LinkInterface;
use Class152\PizzaMamamia\Interfaces\PriceInterface;
use Class152\PizzaMamamia\Interfaces\Product\ProductBasicInformationsInterface;
use Class152\PizzaMamamia\Interfaces\ShoppingCart\ShoppingCartInterface;
use Class152\PizzaMamamia\Interfaces\ShoppingCart\ShoppingCartItemInterface;
use Class152\PizzaMamamia\Library\Price;

class ShoppingCartList extends AbstractIterator implements ShoppingCartInterface
{
    /** @var float */
    private $summaryPrice = 0;

    /**
     * ShoppingCartList constructor.
     * @param array $shoppingCartItemsArray
     */
    public function __construct(array $shoppingCartItemsArray )
    {
        
        parent::__construct( $shoppingCartItemsArray );
        
        /** @var ProductBasicInformationsInterface $shoppingCartItem */
        foreach( $this->iteratorArray as $shoppingCartItem )
        {
            $this->summaryPrice += $shoppingCartItem
                ->getDefaultVariant()
                ->getPrice()
                ->getGrossPriceValue();
        }
    }

    /**
     * @return ShoppingCartItemInterface
     */
    public function current() : ShoppingCartItemInterface
    {
        return parent::current();
    }

    /**
     * @return \Class152\PizzaMamamia\Interfaces\PriceInterface
     */
    public function getSummeryPrice() : PriceInterface
    {
        return new Price( $this->summaryPrice, 19 );
    }

    /**
     * @return \Class152\PizzaMamamia\Interfaces\LinkInterface
     */
    public function getCheckoutUrl() : LinkInterface
    {
        return '/checkout/index';
    }

    /**
     * where we can go after reading the shoppingCart
     *
     * @return \Class152\PizzaMamamia\Interfaces\LinkInterface
     */
    public function getReferer() : LinkInterface
    {
        // TODO: have to return a LinkClass
       // return new L$_SERVER['HTTP_REFERER'];
    }
}