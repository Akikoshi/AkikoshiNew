<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 14:00
 */

namespace Class152\PizzaMamamia\Services\ProductService\Library;


use Class152\PizzaMamamia\Services\ProductService\Interfaces\ProductItemInterface;

class ProductItem implements ProductItemInterface
{
    /** @var  string */
    private $name;

    /** @var  string */
    private $description;

    /** @var  string */
    private $pictureUrl;

    /** @var  string */
    private $detailUrl;

    /** @param  string $name
     *  @param  string $description
     *  @param  string $pictureUrl
     *  @param  string $detailUrl
     */
    public function __construct(string $name, string $description, string $pictureUrl, string $detailUrl)
    {
        $this->name = $name;
        $this->description = $description;
        $this->pictureUrl =  $pictureUrl;
        $this->detailUrl = $detailUrl;
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
}