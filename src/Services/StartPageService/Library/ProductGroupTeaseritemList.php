<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 26.09.2016
 * Time: 14:27
 */

namespace Class152\PizzaMamamia\Services\StartPageService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Services\StartPageService\Exceptions\ProductGroupTeaserNeedsProductGroupTeaserItemException;

class ProductGroupTeaserItemList extends AbstractIterator
{
    /**
     * ProductGroupTeaseritemList constructor.
     * @param array|null $array
     * @throws ProductGroupTeaserNeedsProductGroupTeaserItemException
     */
    public function __construct( array $array = null )
    {
        if (is_null($array)) {
            return;
        }

        foreach (array_keys($array) as $keys) {
            if (
                !is_object($array[$keys])
                || !is_a($array[$keys], 'CampaignItem')
            ) {
                throw new ProductGroupTeaserNeedsProductGroupTeaserItemException(
                    'constructor of ProductGroupTeaser can only use ProductGroupTeaserItem objects'
                );
            }
        }
        $this->iteratorArray = $array;
    }

    /**
     * @param ProductGroupTeaserItem $productGroupTeaserItem
     */
    public function addItem( ProductGroupTeaserItem $productGroupTeaserItem )
    {
        $this->iteratorArray[] = $productGroupTeaserItem;
    }

    /**
     * @return ProductGroupTeaserItem
     */
    public function current() : ProductGroupTeaserItem
    {
        return parent::current();
    }
}