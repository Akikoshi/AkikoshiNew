<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 13.09.2016
 * Time: 14:36
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Library;


class SliderFactory
{
    private $sliderItemList;

    /**
     * SliderFactory constructor.
     */
    public function __construct()
    {
        
        $this->sliderItemList = new SliderItemList();

        $this->sliderItemList->addItem(
            new SliderItem(
                'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                'campaigns/index?typ=1',
                'Ueberschrift',
                'Text TextText TextText TextText TextText Text',
                'ksadhfoi'
            )
        );

        $this->sliderItemList->addItem(
            new SliderItem(
                'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                'campaigns/index?typ=2',
                'Ueberschrift',
                'Text TextText TextText TextText TextText Text',
                'Ranger'
            )
        );

        $this->sliderItemList->addItem(
            new SliderItem(
                'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                'campaigns/index?typ=3',
                'Ueberschrift',
                'Text TextText TextText TextText TextText Text',
                'Thomas'
            )
        );
        
    }

    /**
     * @return SliderItemList
     */
        public function getSliderItem() : SliderItemList
        {
            return $this->sliderItemList;
        }
}