<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 16.09.2016
 * Time: 10:06
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Library;


class ProductItem
{
	/*
	 * ToDo: Should implement a global ProductItem-Interface
	 */

	/**
	 * @var string
	 * Hold the name of the product.
	 */
	private $name;

	/**
	 * @var string
	 * Hold the description of the product.
	 */
	private $description;

	/**
	 * @var string
	 * Hold the path/url to the product-picture.
	 */
	private $pictureUrl;

	/**
	 * @var string
	 * Hold the url to the product-detail-view.
	 */
	private $detailUrl;

	/**
	 * @var float
	 * Hold the price of the product.
	 */
	private $price;

	/** @param  string $name
	 *  @param  string $description
	 *  @param  string $pictureUrl
	 *  @param  string $detailUrl
	 *  @param  float  $price
	 */
	public function __construct(string $name, string $description, string $pictureUrl, string $detailUrl, float $price)
	{
		$this->name = $name;
		$this->description = $description;
		$this->pictureUrl =  $pictureUrl;
		$this->detailUrl = $detailUrl;
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

