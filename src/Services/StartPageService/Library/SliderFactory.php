<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 13.09.2016
 * Time: 14:36
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Library;


use Class152\PizzaMamamia\Services\StartPageService\Library\SliderItem;
use Class152\PizzaMamamia\Services\StartPageService\Repository\Entities\SliderEntity;
use Class152\PizzaMamamia\Services\StartPageService\Repository\SliderRepository;

class SliderFactory
{
    private $sliderItemList;

    /**
     * SliderFactory constructor.
     */
    public function __construct()
    {
        $this->sliderItemList = new SliderItemList();
        $repository = new SliderRepository();
        $sliders = $repository->getSliderItems();

        /** @var SliderEntity $slide */
        foreach( $sliders as $slide )
        {
            $this->sliderItemList->addItem(
                new SliderItem(
                    $slide->getPicture(),
                    $slide->getPictureUrl(),
                    $slide->getHeadline(),
                    $slide->getContent(),
                    $slide->getButton()
                )
            );
        }
    }
        
    /**
     * @return SliderItemList
     */
    public function getSliderItem() : SliderItemList
    {
        return $this->sliderItemList;
    }
}

// $this->sliderItemList->addItem(
//            new SliderItem(
//                'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
//                'campaigns/index',
//                'Ueberschrift',
//                'Text TextText TextText TextText TextText Text',
//                'ksadhfoi'
//            )
//        );
//
//        $this->sliderItemList->addItem(
//            new SliderItem(
//                'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
//                'campaigns/index',
//                'Ueberschrift',
//                'Text TextText TextText TextText TextText Text',
//                'Ranger'
//            )
//        );
//
//        $this->sliderItemList->addItem(
//            new SliderItem(
//                'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
//                'campaigns/index',
//                'Ueberschrift',
//                'Text TextText TextText TextText TextText Text',
//                'Thomas'
//            )
//        );
//        
//    }
