<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 24.10.2016
 * Time: 09:11
 */

namespace Class152\PizzaMamamia\Services\ShoppingCartService\Repository\Entities;


class ShoppingCartEntity
{
    /** @var int */
    private $parentId;

    /** @var string */
    private $name;

    /** @var int  */
    private $productGroup;

    /** @var float  */

    private $GrossPrice;

    /** @var string */

    private $type;
    /**
     * UserEntity constructor.
     *
     * @param array $userRow
     */
    public function __construct( array $userRow )
    {

        $this->name = $userRow['name'];
        $this->parentId = $userRow['parentId'];
        $this->productGroup = $userRow['productGroup'];
        $this->GrossPrice = $userRow['GrossPrice'];
        $this->type = $userRow['type'];
    }

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getGrossPrice()
    {
        return $this->GrossPrice;
    }

    /**
     * @return int
     */
    public function getProductGroup()
    {
        return $this->parentId;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}