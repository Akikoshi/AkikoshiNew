<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 24.10.2016
 * Time: 09:19
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Services\ProductDetailService\Exceptions\MediaFileListNeedsMediaFileException;

class MediaFileList extends AbstractIterator
{


	/**
	 * MediaFileList constructor.
	 * @param array|null $array
	 * @throws \Class152\PizzaMamamia\Services\ProductDetailService\Exceptions\MediaFileListNeedsMediaFileException
	 */
	public function __construct( array $array = null )
	{
		if( is_null( $array ) )
		{
			return;
		}

		foreach (array_keys($array) as $keys )
		{
			if(
				! is_object( $array[$keys] )
				|| ! is_a( $array[$keys], 'MediaFile' )
			)
			{
				throw new MediaFileListNeedsMediaFileException(
					'constructor of MediaFileList can only use MenuFile objects'
				);
			}
		}
		$this->iteratorArray = $array;
	}

	/**
	 * @param MediaFile $mediaFile
	 */
	public function addItem( MediaFile $mediaFile )
	{
		$this->iteratorArray[] = $mediaFile;
	}

	/**
	 * overloads the current method for restricted type of return value
	 *
	 * @return \Class152\PizzaMamamia\Services\ProductDetailService\Library\MediaFile
	 */
	public function current() : MediaFile
	{
		return parent::current();
	}
	
}