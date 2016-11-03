<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 24.10.2016
 * Time: 14:23
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Services\ProductDetailService\Exceptions\ComponentListNeedsComponentException;

class ComponentList extends AbstractIterator
{

    /**
     * ComponentList constructor.
     * @param array|null $array
     * @throws \Class152\PizzaMamamia\Services\ProductDetailService\Exceptions\ComponentListNeedsComponentException
     */
    public function __construct(array $array = null )
    {
        if( is_null( $array ) )
        {
            return;
        }

        foreach (array_keys($array) as $keys )
        {
            if(
                ! is_object( $array[$keys] )
                || ! is_a( $array[$keys], 'Component' )
            )
            {
                throw new ComponentListNeedsComponentException(
                    'constructor of ComponentList can only use Component objects'
                );
            }
        }
        $this->iteratorArray = $array;
    }

    /**
     * @param Component $Component
     */
    public function addItem( Component $Component )
    {
        $this->iteratorArray[] = $Component;
    }

    /**
     * overloads the current method for restricted type of return value
     *
     * @return \Class152\PizzaMamamia\Services\ProductDetailService\Library\Component
     */
    public function current() : Component
    {
        return parent::current();
    }
}