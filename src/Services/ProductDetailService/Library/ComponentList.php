<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 24.10.2016
 * Time: 14:23
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Interfaces\AbstractIteratorInterface;
use Class152\PizzaMamamia\Services\ProductDetailService\Exceptions\ComponentListNeedsComponentException;

class ComponentList extends AbstractIterator
{
    
    /**
     * ComponentList constructor.
     * @param array|null $array
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
                    'constructor of MediaFileList can only use MenuFile objects'
                );
            }
        }
        $this->iteratorArray = $array;
    }

    /**
     * @param MediaFile $mediaFile
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