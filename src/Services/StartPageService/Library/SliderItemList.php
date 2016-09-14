<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 13.09.2016
 * Time: 14:32
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Services\StartPageService\Exceptions\SliderListNeedsSliderItemExecption;

class SliderItemList extends AbstractIterator
{
    /**
     * SliderItemList constructor.
     * @param array|null $array
     * @throws SliderListNeedsSliderItemExecption
     */
    public function __construct( array $array = null )
    {
        if( is_null( $array ) )
        {
            return;
        }
        
        foreach (array_keys( $array ) as $keys)
        {
            if(
                ! is_object( $array[$keys] )
                || ! is_a( $array[$keys], 'SliderItem' )
            )
            {
                throw new SliderListNeedsSliderItemExecption(
                    'constructor of SliderItemList can only use SliderItem objects'
                );
            }
        }
        
        $this->iteratorArray = $array;
    
    }

    /**
     * @param SliderItem $sliderItem
     */
    public function addItem( SliderItem $sliderItem )
    {
        $this->iteratorArray[] = $sliderItem;   
    }

    /**
     * @return SliderItem
     */
    public function current() : SliderItem
    {
        return parent::current();
    }

}