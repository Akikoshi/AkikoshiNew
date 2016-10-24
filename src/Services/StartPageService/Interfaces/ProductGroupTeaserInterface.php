<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 26.09.2016
 * Time: 14:22
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Interfaces;


interface ProductGroupTeaserInterface
{
    /**
     * @return int
     */
    public function count() : int;

    /**
     * @return array
     */
    public function getKeys() : array;

    /**
     * @param mixed|null $key
     * @return mixed
     */
    public function getElement (mixed $key = null);

    /**
     * ProductGroupTeaserInterface constructor.
     * @param array|null $array
     */
    public function __construct(array $array = null);

    /**
     * @param ProductGroupTeaserItem $productGroupTeaserItem
     * @return mixed
     */
    public function addItem(ProductGroupTeaserItem $productGroupTeaserItem);

    /**
     * @return ProductGroupTeaserItem
     */
    public function current() : ProductGroupTeaserItem;
}