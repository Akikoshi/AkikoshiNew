<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 25.10.2016
 * Time: 08:01
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;


class Component
{

private $componentId;
    
private $name;
    
private $componentGroup;

private $MediaFile;    
    
private $ordering;


    public function __construct(
        $componentId,
        $name,
        $componentGroup,
        $MediaFile,
        $ordering
    )
    {

        $this->componentId =    $componentId;
        $this->name     =       $name;
        $this->componentGroup = $componentGroup;
        $this->MediaFile =   $MediaFile;
        $this->ordering =       $ordering;

    }

    /**
     * @return mixed
     */
    public function getComponentId()
    {
        return $this->componentId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

   
    /**
     * @return mixed
     */
    public function getMediaFile()
    {
        return $this->MediaFile;
    }

    /**
     * @return mixed
     */
    public function getComponentGroup()
    {
        return $this->componentGroup;
    }
    
    /**
     * @return mixed
     */
    public function getOrdering()
    {
        return $this->ordering;
    }
    
}