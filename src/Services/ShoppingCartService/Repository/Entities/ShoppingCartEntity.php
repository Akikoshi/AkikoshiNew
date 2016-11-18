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

    /** @var  int */
    private $mediaFileId;

    /** @var  int */
    private $vat;

    /** @var  string */
    private $nameExtension;

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
        $this->mediaFileId = $userRow['mediaFileId'];
        $this->vat = $userRow['vat'];
        $this->nameExtension = $userRow['nameExtension'];
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
    public function getGrossPrice() : float
    {
        return $this->GrossPrice;
    }

    /**
     * @return int
     */
    public function getProductGroup() : int
    {
        return $this->parentId;
    }

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getMediaFileId() : int
    {
        return $this->mediaFileId;
    }

    /**
     * @return int
     */
    public function getVat() : int
    {
        return $this->vat;
    }

    /**
     * @return string
     */
    public function getNameExtension() : string
    {
        return $this->nameExtension;
    }


}