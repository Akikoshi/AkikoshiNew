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
	/** @var int */
	private $productId;

	/** @var string */
	private $name;

	/** @var string */
	private $nameExtension;

	/** @var string */
	private $description;

	/** @var MediaFile */
	private $image;

	/** @var float */
	private $grossPrice;

	/** @var int */
	private $vat;

	/**
	 * ProductItem constructor.
	 * @param int $productId
	 * @param string $name
	 * @param string $nameExtension
	 * @param string $description
	 * @param MediaFile $image
	 * @param float $grossPrice
	 * @param int $vat
	 */
	public function __construct(
		int $productId,
		string $name,
		string $nameExtension,
		string $description,
		MediaFile $image,
		float $grossPrice,
		int $vat
	) {
		$this->productId;
		$this->name = $name;
		$this->nameExtension = $nameExtension;
		$this->description = $description;
		$this->image = $image;
		$this->grossPrice = $grossPrice;
		$this->vat = $vat;
	}

	/**
	 * @return int
	 */
	public function getProductId()
	{
		return $this->productId;
	}

	/**
	 * @param int $productId
	 */
	public function setProductId( $productId )
	{
		$this->productId = $productId;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName( $name )
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getNameExtension()
	{
		return $this->nameExtension;
	}

	/**
	 * @param string $nameExtension
	 */
	public function setNameExtension( $nameExtension )
	{
		$this->nameExtension = $nameExtension;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription( $description )
	{
		$this->description = $description;
	}

	/**
	 * @return int
	 */
	public function getVat()
	{
		return $this->vat;
	}

	/**
	 * @param int $vat
	 */
	public function setVat( $vat )
	{
		$this->vat = $vat;
	}

	/**
	 * @return float
	 */
	public function getGrossPrice()
	{
		return number_format( $this->grossPrice, 2, ',', '.' );
	}
}

