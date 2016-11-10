<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 18.10.2016
 * Time: 09:24
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities;


class AddendaEntity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $tag;

    /**
     * @var int
     */
    private $componentId;

    /**
     * AddendaEntity constructor.
     * @param $id
     * @param $type
     * @param $name
     * @param $tag
     */
    public function __construct(
        $id,
        $type,
        $name,
        $tag
    )
    {
        $this->$id = $id;
        $this->$type = $type;
        $this->$name = $name;
        $this->$tag = $tag;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * @return int
     */
    public function getComponentId(): int
    {
        return $this->componentId;
    }
}