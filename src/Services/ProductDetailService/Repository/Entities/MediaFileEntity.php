<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 17.10.2016
 * Time: 13:11
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities;


class MediaFileEntity
{

	private $mime;
	private $height;
	private $width;
	private $thumbHeight;
	private $thumbWidth;
	private $bigHeight;
	private $bigWidth;
	private $url;
	private $thumbUrl;
	private $bigUrl;
	private $titleTag;
	private $altTag;


	public function __construct(
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

		$this->mime = $mime;
		$this->height = $height;
		$this->width = $width;
		$this->thumbHeight =$thumbHeight;
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
	 * @return mixed
	 */
	public function getMime()
	{
		return $this->mime;
	}

	/**
	 * @return mixed
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * @return mixed
	 */
	public function getWidth()
	{
		return $this->width;
	}

	/**
	 * @return mixed
	 */
	public function getThumbHeight()
	{
		return $this->thumbHeight;
	}

	/**
	 * @return mixed
	 */
	public function getThumbWidth()
	{
		return $this->thumbWidth;
	}

	/**
	 * @return mixed
	 */
	public function getBigHeight()
	{
		return $this->bigHeight;
	}

	/**
	 * @return mixed
	 */
	public function getBigWidth()
	{
		return $this->bigWidth;
	}

	/**
	 * @return mixed
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * @return mixed
	 */
	public function getThumbUrl()
	{
		return $this->thumbUrl;
	}

	/**
	 * @return mixed
	 */
	public function getBigUrl()
	{
		return $this->bigUrl;
	}

	/**
	 * @return mixed
	 */
	public function getTitleTag()
	{
		return $this->titleTag;
	}

	/**
	 * @return mixed
	 */
	public function getAltTag()
	{
		return $this->altTag;
	}


	
}