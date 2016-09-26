<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 26.09.2016
 * Time: 14:27
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Library;


use Class152\PizzaMamamia\Services\StartPageService\Repository\Entities\ProductGroupTeaserEntity;
use Class152\PizzaMamamia\Services\StartPageService\Repository\ProductGroupTeaserRepository;

class ProductGroupTeaserFactory
{
    private $productGroupTeaserList;

    public function __construct()
    {
        $this->productGroupTeaserList = new ProductGroupTeaserItemList();
        $repository = new ProductGroupTeaserRepository();
        $productGroupTeasers = $repository->getProductGroupTeaserItems();

        /** @var ProductGroupTeaserEntity $teaser */
        foreach ( $productGroupTeasers as $teaser )
        {
            $this->productGroupTeaserList->addItem(
                new ProductGroupTeaserItem(
                    $teaser->getContent(),
                    $teaser->getHeadline(),
                    $teaser->getPictureSrc(),
                    $teaser->getTeaserLink()
                )
            );
        }
    }

    public function getProductGroupTeaserItem() : ProductGroupTeaserItemList
    {
        return $this->productGroupTeaserList;
    }
}