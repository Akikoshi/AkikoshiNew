<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 26.09.2016
 * Time: 11:27
 */
namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Library;

interface MediaFileInterface
{
	/**
	 * @return int
	 */
	public function getId() : int;

	/**
	 * @param int $id
	 */
	public function setId( $id );

	/**
	 * @return string
	 */
	public function getMime() : string;

	/**
	 * @param string $mime
	 */
	public function setMime( $mime );

	/**
	 * @return int
	 */
	public function getHeight() : int;

	/**
	 * @param int $height
	 */
	public function setHeight( $height );

	/**
	 * @return int
	 */
	public function getWidth() : int;

	/**
	 * @param int $width
	 */
	public function setWidth( $width );

	/**
	 * @return int
	 */
	public function getThumbHeight() : int;

	/**
	 * @param int $thumbHeight
	 */
	public function setThumbHeight( $thumbHeight );

	/**
	 * @return int
	 */
	public function getThumbWidth() : int;

	/**
	 * @param int $thumbWidth
	 */
	public function setThumbWidth( $thumbWidth );

	/**
	 * @return int
	 */
	public function getBigHeight() : int;

	/**
	 * @param int $bigHeight
	 */
	public function setBigHeight( $bigHeight );

	/**
	 * @return int
	 */
	public function getBigWidth() : int;

	/**
	 * @param int $bigWidth
	 */
	public function setBigWidth( $bigWidth );

	/**
	 * @return string
	 */
	public function getUrl() : string;

	/**
	 * @param string $url
	 */
	public function setUrl( $url );

	/**
	 * @return string
	 */
	public function getThumbUrl() : string;

	/**
	 * @param string $thumbUrl
	 */
	public function setThumbUrl( $thumbUrl );

	/**
	 * @return string
	 */
	public function getBigUrl() : string;

	/**
	 * @param string $bigUrl
	 */
	public function setBigUrl( $bigUrl );

	/**
	 * @return string
	 */
	public function getTitleTag() : string;

	/**
	 * @param string $titleTag
	 */
	public function setTitleTag( $titleTag );

	/**
	 * @return string
	 */
	public function getAltTag() : string;

	/**
	 * @param string $altTag
	 */
	public function setAltTag( $altTag );
}