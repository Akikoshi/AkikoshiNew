<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 26.09.2016
 * Time: 13:01
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Repositories\Entities;


class ProductEntity
{
	/** @var int */
	private $id;

	/** @var string */
	private $name;

	/** @var string */
	private $nameExtension;

	/** @var string */
	private $description;

	/** @var int */
	private $mediaFileId;

	/** @var string */
	private $internalName;

	/** @var float */
	private $grossPrice;

	/** @var int */
	private $vat;

	public function __construct(
		int $id,
		string $name,
		string $nameExtension,
		string $description,
		int $mediaFileId,
		string $internalName,
		float $grossPrice,
		int $vat
	)
	{
		$this->id = $id;
		$this->name = $name;
		$this->nameExtension = $nameExtension;
		$this->description = $description;
		$this->mediaFileId = $mediaFileId;
		$this->internalName = $internalName;
		$this->grossPrice = $grossPrice;
		$this->vat = $vat;
	}

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getNameExtension()
	{
		return $this->nameExtension;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @return int
	 */
	public function getMediaFileId()
	{
		return $this->mediaFileId;
	}

	/**
	 * @return string
	 */
	public function getInternalName()
	{
		return $this->internalName;
	}

	/**
	 * @return float
	 */
	public function getGrossPrice()
	{
		return $this->grossPrice;
	}

	/**
	 * @return int
	 */
	public function getVat()
	{
		return $this->vat;
	}
}