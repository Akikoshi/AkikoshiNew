<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 26.09.2016
 * Time: 13:01
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Repositories\Entities;


class MediaEntity
{
	/** @var int */
	private $id;

	/** @var string */
	private $mime;

	/** @var int */
	private $height;

	/** @var int */
	private $width;

	/** @var int */
	private $thumbHeight;

	/** @var int */
	private $thumbWidth;

	/** @var int */
	private $bigHeight;

	/** @var int */
	private $bigWidth;

	/** @var string */
	private $url;

	/** @var string */
	private $thumbUrl;

	/** @var string */
	private $bigUrl;

	/** @var string */
	private $titleTag;

	/** @var string */
	private $altTag;


	public function __construct(
		int $id,
		string $mime,
		string $height,
		int $width,
		int $thumbHeight,
		int $thumbWidth,
		int $bigHeight,
		int $bigWidth,
		string $url,
		string $thumbUrl,
		string $bigUrl,
		string $titleTag,
		string $altTag
	) {
		$this->id = $id;
		$this->mime = $mime;
		$this->height = $height;
		$this->width = $width;
		$this->thumbHeight = $thumbHeight;
		$this->thumbWidth = $thumbWidth;
		$this->bigHeight = $bigHeight;
		$this->bigWidth = $bigWidth;
		$this->url = $url;
		$this->thumbUrl = $thumbUrl;
		$this->bigUrl = $bigUrl;
		$this->titleTag = $titleTag;
		$this->altTag = $altTag;
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
	public function getMime()
	{
		return $this->mime;
	}

	/**
	 * @return int
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * @return int
	 */
	public function getWidth()
	{
		return $this->width;
	}

	/**
	 * @return int
	 */
	public function getThumbHeight()
	{
		return $this->thumbHeight;
	}

	/**
	 * @return int
	 */
	public function getThumbWidth()
	{
		return $this->thumbWidth;
	}

	/**
	 * @return int
	 */
	public function getBigHeight()
	{
		return $this->bigHeight;
	}

	/**
	 * @return int
	 */
	public function getBigWidth()
	{
		return $this->bigWidth;
	}

	/**
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * @return string
	 */
	public function getThumbUrl()
	{
		return $this->thumbUrl;
	}

	/**
	 * @return string
	 */
	public function getBigUrl()
	{
		return $this->bigUrl;
	}

	/**
	 * @return string
	 */
	public function getTitleTag()
	{
		return $this->titleTag;
	}

	/**
	 * @return string
	 */
	public function getAltTag()
	{
		return $this->altTag;
	}
}