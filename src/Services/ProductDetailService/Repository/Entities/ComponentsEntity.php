<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 18.10.2016
 * Time: 09:24
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities;


/**
 * Class Components
 * @package Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities
 */
class Components
{
    /**
     * @var int
     */
    private $componentId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $componentGroup;
    
    /**
     * @var int
     */
    private $ordering;

    /**
     * @var int
     */
    private $fkMediaFiles;


    /**
     * Components constructor.
     * @param $componentId
     * @param $name
     * @param $componentGroup
     * @param $fkMediaFiles
     * @param $ordering
     */
    public function __construct(
        $componentId,
        $name,
        $componentGroup,
        $fkMediaFiles,
        $ordering
    )
    {

        $this->componentId =    $componentId;
        $this->name     =       $name;
        $this->componentGroup = $componentGroup;
        $this->fkMediaFiles =   $fkMediaFiles;
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
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * @return int
     */
    public function getComponentGroup()
    {
        return $this->componentGroup;
    }

  
    /**
     * @return int
     */
    public function getFkMediaFiles()
    {
        return $this->fkMediaFiles;
    }


}