<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 14.09.2016
 * Time: 11:43
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


class SortListFactory
{
    private $sortList;

    public function __construct()
    {
        $this->sortList = new SortList();
        $this->sortList->addItem(
            new SortItem(3.23)
        );

        $this->sortList->addItem(
            new SortItem(5.23)
        );

        $this->sortList->addItem(
            new SortItem(8.23)
        );
    }

    public function getSortList()
    {
        return $this->sortList;
    }
}