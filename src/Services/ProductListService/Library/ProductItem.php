<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 14:00
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


class ProductItem
{
    /** @var  string */
    private $name;

    /** @var  string */
    private $description;

    /** @var  int */
    private $mediaFileId;

    /** @var  string */
    private $detailUrl;

    /** @var  float */
    private $price;


    public function __construct(ProductListRepository $productListRepository)
    {
        $this->name = $productListRepository->getProductName();
        $this->description = $productListRepository->getShortDescription();
        $this->mediaFileId =  $productListRepository->getMediaFileId();
        $this->detailUrl = $;
        $this->price = $price;
    }

    /** @return string */
    public function getName() : string
    {
        return $this->name;
    }

    /** @return string */
    public function getDescription() : string
    {
        return $this->description;
    }

    /** @return string */
    public function getPictureUrl() : string
    {
        return $this->pictureUrl;
    }

    /** @return string */
    public function getDetailUrl() : string
    {
        return $this->detailUrl;
    }

    /** @return float */
    public function getPrice()
    {
        return number_format($this->price, 2, ',', '.');
    }
}