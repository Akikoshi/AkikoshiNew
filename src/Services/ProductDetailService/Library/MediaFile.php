<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 17.10.2016
 * Time: 13:12
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;


use Class152\PizzaMamamia\Interfaces\MediaFileInterface;

class MediaFile implements MediaFileInterface
{
	/**
	 * @var int
	 */
	private $id;
	
	/**
	 * @var string
	 */
	private $mime;

	/**
	 * @var int
	 */
	private $height;

	/**
	 * @var int
	 */
	private $width;
	
	/**
	 * @var int
	 */
	private $thumbHeight;

	/**
	 * @var int
	 */
	private $thumbWidth;

	/**
	 * @var int
	 */
	private $bigHeight;

	/**
	 * @var int
	 */
	private $bigWidth;

	/**
	 * @var string
	 */
	private $url;

	/**
	 * @var string
	 */
	private $thumbUrl;
	
	/**
	 * @var string
	 */
	private $bigUrl;

	/**
	 * @var string
	 */
	private $titleTag;

	/**
	 * @var string
	 */
	private $altTag;


	public function __construct(
		$id,
		$mime,
		$height,
		$width,
		$thumbHeight,
		$thumbWidth,
		$bigHeight,
		$bigWidth,
		$url,
		$thumbUrl,
		$bigUrl,
		$titleTag,
		$altTag )
	{

		$this->id = $id;
		$this->mime = $mime;
		$this->height = $height;
		$this->width = $width;
		$this->thumbHeight = $thumbHeight;
		$this->thumbWidth = $thumbWidth;
		$this->bigHeight = $bigHeight;
		$this->thumbUrl = $bigWidth;
		$this->bigWidth = $url;
		$this->url = $thumbUrl;
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
	 * @param int $id
	 */
	public function setId( $id )
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getMime()
	{
		return $this->mime;
	}

	/**
	 * @param string $mime
	 */
	public function setMime( $mime )
	{
		$this->mime = $mime;
	}

	/**
	 * @return int
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * @param int $height
	 */
	public function setHeight( $height )
	{
		$this->height = $height;
	}

	/**
	 * @return int
	 */
	public function getWidth()
	{
		return $this->width;
	}

	/**
	 * @param int $width
	 */
	public function setWidth( $width )
	{
		$this->width = $width;
	}

	/**
	 * @return int
	 */
	public function getThumbHeight()
	{
		return $this->thumbHeight;
	}

	/**
	 * @param int $thumbHeight
	 */
	public function setThumbHeight( $thumbHeight )
	{
		$this->thumbHeight = $thumbHeight;
	}

	/**
	 * @return int
	 */
	public function getThumbWidth()
	{
		return $this->thumbWidth;
	}

	/**
	 * @param int $thumbWidth
	 */
	public function setThumbWidth( $thumbWidth )
	{
		$this->thumbWidth = $thumbWidth;
	}

	/**
	 * @return int
	 */
	public function getBigHeight()
	{
		return $this->bigHeight;
	}

	/**
	 * @param int $bigHeight
	 */
	public function setBigHeight( $bigHeight )
	{
		$this->bigHeight = $bigHeight;
	}

	/**
	 * @return int
	 */
	public function getBigWidth()
	{
		return $this->bigWidth;
	}

	/**
	 * @param int $bigWidth
	 */
	public function setBigWidth( $bigWidth )
	{
		$this->bigWidth = $bigWidth;
	}

	/**
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * @param string $url
	 */
	public function setUrl( $url )
	{
		$this->url = $url;
	}

	/**
	 * @return string
	 */
	public function getThumbUrl()
	{
		return $this->thumbUrl;
	}

	/**
	 * @param string $thumbUrl
	 */
	public function setThumbUrl( $thumbUrl )
	{
		$this->thumbUrl = $thumbUrl;
	}

	/**
	 * @return string
	 */
	public function getBigUrl()
	{
		return $this->bigUrl;
	}

	/**
	 * @param string $bigUrl
	 */
	public function setBigUrl( $bigUrl )
	{
		$this->bigUrl = $bigUrl;
	}

	/**
	 * @return string
	 */
	public function getTitleTag()
	{
		return $this->titleTag;
	}

	/**
	 * @param string $titleTag
	 */
	public function setTitleTag( $titleTag )
	{
		$this->titleTag = $titleTag;
	}

	/**
	 * @return string
	 */
	public function getAltTag()
	{
		return $this->altTag;
	}

	/**
	 * @param string $altTag
	 */
	public function setAltTag( $altTag )
	{
		$this->altTag = $altTag;
	}
	
	
	
	
}