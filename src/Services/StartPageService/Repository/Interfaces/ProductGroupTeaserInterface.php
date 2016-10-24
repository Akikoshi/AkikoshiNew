<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 09:11
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Repository\Interfaces;


use Class152\PizzaMamamia\Services\StartPageService\Repository\Entities\ProductGroupTeaserEntity;

interface ProductGroupTeaserInterface
{
    /**
     * @return array
     */
    public function getProductGroupTeaserItems() : array;

    /**
     * @param $line
     * @return ProductGroupTeaserEntity
     */
    public function askForSingleProductGroupTeaserItem( $line ) : ProductGroupTeaserEntity;
}