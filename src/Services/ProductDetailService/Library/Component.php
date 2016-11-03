<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 25.10.2016
 * Time: 08:01
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;


use Class152\PizzaMamamia\Services\ProductConfiguratorService\Library\AddendaItemList;

class Component
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
    private $componentGroupId;

    /**
     * @var MediaFile
     */
    private $MediaFile;

    /**
     * @var int
     */
    private $ordering;

    /**
     * @var AddendaItemList
     */
    private $additiveList;

    /**
     * @var AddendaItemList
     */
    private $allergicList;

    /**
     * Component constructor.
     * @param $componentId
     * @param $name
     * @param $componentGroupId
     * @param $MediaFile
     * @param $ordering
     * @param $additiveList
     * @param $allergicList
     */
    public function __construct(
        $componentId,
        $name,
        $componentGroupId,
        $MediaFile,
        $ordering,
        $additiveList,
        $allergicList
    ) {

        $this->componentId = $componentId;
        $this->name = $name;
        $this->componentGroupId = $componentGroupId;
        $this->MediaFile = $MediaFile;
        $this->ordering = $ordering;
        $this->$additiveList = $additiveList;
        $this->$allergicList = $allergicList;
    }

    /**
     * @return int
     */
    public function getComponentId()
    {
        return $this->componentId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getComponentGroupId()
    {
        return $this->componentGroupId;
    }

    /**
     * @return MediaFile
     */
    public function getMediaFile()
    {
        return $this->MediaFile;
    }

    /**
     * @return int
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * @return AddendaItemList
     */
    public function getAdditiveList()
    {
        return $this->additiveList;
    }

    /**
     * @return AddendaItemList
     */
    public function getAllergicList()
    {
        return $this->allergicList;
    }
}