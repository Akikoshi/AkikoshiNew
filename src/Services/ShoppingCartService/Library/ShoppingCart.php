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

class ShoppingCart extends AbstractIterator implements ShoppingCartInterface
{
    /** @var float */
    private $summaryPrice = 0;

    /** @var int */
    private $parentId;

    /** @var string */
    private $name;

    /** @var int */
    private $productGroup;

    /** @var float */
    private $GrossPrice;

    /** @var string */
    private $type;

    public function __construct(array $shoppingCartItemsArray )
    {
        parent::__construct( $shoppingCartItemsArray );
        /** @var ProductBasicInformationsInterface $shoppingCartItem */
        foreach( $this->iteratorArray as $shoppingCartItem )
        {
            $this->summaryPrice += $shoppingCartItem->getVariants()->getPrice()->getGrossPriceValue();
        }
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
        // TODO: Implement getReferer() method.
    }
}