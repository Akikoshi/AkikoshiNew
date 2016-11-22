<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 14.11.2016
 * Time: 09:33
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Iterators;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Services\ProductListService\values\Link;

class Paginator extends AbstractIterator
{
    /** @var int */
    private $itemsAmount;

    /** @var int */
    private $currentPage;

    /** @var int */
    private $itemsPerPage;

    public function __construct(array $linkClasses, int $itemsAmount, int $currentPage, int $itemsPerPage)
    {
        parent::__construct($linkClasses);
        $this->itemsAmount = $itemsAmount;
        $this->currentPage = $currentPage;
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return Link
     */
    public function current() : Link
    {
        $this->iteratorArray;
    }

    /**
     * @return int
     */
    public function getItemsAmount()
    {
        return $this->itemsAmount;
    }

    /**
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @return int
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    /**
     * @param null $key
     * @return Link
     */
    public function getElement($key = null) : Link
    {
        return parent::getElement($key);
    }
}