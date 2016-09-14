<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 14.09.2016
 * Time: 09:43
 */
namespace Class152\PizzaMamamia\Services\StartPageService\Interfaces;

use Class152\PizzaMamamia\Services\StartPageService\Exceptions\SliderListNeedsSliderItemExecption;
use Class152\PizzaMamamia\Services\StartPageService\Library\SliderItem;

interface SliderItemListInterface
{
    /**
     * Count elements of an object
     *
     * @link  http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     *        </p>
     *        <p>
     *        The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count() : int;

    /**
     * Gets the name of keys as a array
     *
     * @return array
     */
    public function getKeys() : array;

    /**
     * @param mixed $key
     *
     * @return mixed|null
     */
    public function getElement(mixed $key = null);

    /**
     * SliderItemList constructor.
     * @param array|null $array
     * @throws SliderListNeedsSliderItemExecption
     */
    public function __construct(array $array = null);

    /**
     * @param SliderItem $sliderItem
     */
    public function addItem(SliderItem $sliderItem);

    /**
     * @return SliderItem
     */
    public function current() : SliderItem;
}