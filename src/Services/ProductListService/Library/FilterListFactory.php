<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 14.09.2016
 * Time: 10:59
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;


class FilterListFactory
{
    // Todo: must be implemented to ProductListFactory
   private $filterList;
    
    public function __construct()
    {
        $this->filterList = new FilterList();
        $this->filterList->addItem(
          new FilterItem(35,'Pizza')  
        );

        $this->filterList->addItem(
            new FilterItem(14,'Burger')
        );
        
        $this->filterList->addItem(
            new FilterItem(114,'Beilage')
        );
    }
    
    public function getFilterList()
    {
        return $this->filterList; 
    }
}