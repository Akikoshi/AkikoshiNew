<?php
/**
 * Created by PhpStorm.
 * User: cbiedermann
 * Date: 24.10.2016
 * Time: 08:51
 */

namespace Class152\PizzaMamamia\Interfaces\Campaign;


use Class152\PizzaMamamia\Interfaces\AbstractIteratorInterface;

interface CampaignItemListInterface extends AbstractIteratorInterface
{
    /**
     * @param int $amount
     */
    public function filterByRandom(int $amount);

    /**
     * @param int $productGroupId
     */
    public function filterByProductGroupId(int $productGroupId);

    public function sortByPrice();

    public function sortByProductGroup();

    /**
     * @param int $productId
     */
    public function isThisProductIdInThisCampaign(int $productId);

    /**
     * @return CampaignInterface
     */
    public function current() : CampaignInterface;

    /**
     * @param null|int|string $key
     * @return CampaignInterface
     */
    public function getElement($key = null) : CampaignInterface;
}