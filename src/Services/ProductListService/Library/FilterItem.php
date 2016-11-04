<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 14.09.2016
 * Time: 10:57
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


class FilterItem
{
    //Todo: logic must be implement to Filter class
    
    /** @var  int */
    private $groupId;

    /** @var  string */
    private $group;
    
    public function __construct(int $groupId, string $group)
    {
        $this->grouId = $groupId;
        $this->group = $group;
    }
    
    /** @return int */
    public function getGroupId() : int 
    {
        return $this->groupId;
    }
    
    /** @return string */
    public function getGroup() : string 
    {
        return $this->group;
    }

}