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

	/** @var int */
	private $productId;

	/**
	 * @var string
	 * Hold the name of the product.
	 */
	private $name;

	/**
	 * @var string
	 * Hold a Nameextension like 'small', 'big',...
	 */
	private $nameExtension;

	/**
	 * @var string
	 * Hold the description of the product.
	 */
	private $description;

	/** @var MediaFile */
	private $image;

	/**
	 * @var string
	 * Hold the url to the product-detail-view.
	 */
	private $detailUrl;

	/**
	 * @var float
	 * Hold the price of the product.
	 */
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
	 * @param string $detailUrl
	 * @param float $grossPrice
	 * @param int $vat
	 */
	public function __construct(
								int $productId,
								string $name,
								string $nameExtension,
								string $description,
								MediaFile $image,
								string $detailUrl,
								float $grossPrice,
								int $vat
	)
	{
		$this->productId;
		$this->name = $name;
		$this->nameExtension = $nameExtension;
		$this->description = $description;
		$this->image = $image;
		$this->detailUrl = $detailUrl;
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
	 * @return MediaFile
	 */
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * @param MediaFile $image
	 */
	public function setImage( $image )
	{
		$this->image = $image;
	}

	/**
	 * @return string
	 */
	public function getDetailUrl()
	{
		return $this->detailUrl;
	}

	/**
	 * @param string $detailUrl
	 */
	public function setDetailUrl( $detailUrl )
	{
		$this->detailUrl = $detailUrl;
	}

	/**
	 * @return float
	 */
	public function getGrossPrice()
	{
		return number_format($this->grossPrice, 2, ',', '.');
	}

	/**
	 * @param float $grossPrice
	 */
	public function setGrossPrice( $grossPrice )
	{
		$this->grossPrice = $grossPrice;
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
}

