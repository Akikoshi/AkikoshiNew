<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 03.11.2016
 * Time: 11:46
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Iterators;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Services\ProductListService\Exceptions\MediaFileListNeedsMediaFileException;
use Class152\PizzaMamamia\Services\ProductListService\values\MediaFile;

class MediaFileList extends AbstractIterator
{
    /**
     * MediaFileList constructor.
     * @param array|null $array
     * @throws \Class152\PizzaMamamia\Services\ProductListService\Exceptions\MediaFileListNeedsMediaFileException
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
     * @return MediaFile
     */
    public function current() : MediaFile
    {
        return parent::current();
    }

}