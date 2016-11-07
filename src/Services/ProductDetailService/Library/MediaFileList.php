<?php
/**
 * User: frankenfeldtp
 * Date: 04.11.2016
 * Time: 09:19
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Interfaces\MediaFileListInterface;
use Class152\PizzaMamamia\Services\ProductDetailService\Exceptions\MediaFileListNeedsMediaFileException;


class MediaFileList extends AbstractIterator implements MediaFileListInterface
{

    /**
     * Set true when add MediaFiles.
     * Is false when no MediaFile given.
     *
     * @var boolean
     */
    private $hasItems = false;


    /**
     * MediaFileList constructor.
     * @param array $array
     * @throws MediaFileListNeedsMediaFileException
     */
    public function __construct(array $array = [])
    {
        if (empty($array)) {
            $this->iteratorArray[] = new MediaFile(
                0, 1,
                "image/jpeg",
                450, 450,
                100, 100,
                1000, 1000,
                "/img/noImage.jpg",
                "/img/noImage-thumb.jpg",
                "/img/noImage-big.jpg",
                "No image found.",
                "no image found");
            $this->hasItems = false;
            return;
        }

        foreach (array_keys($array) as $keys) {
            if (
                !is_object($array[$keys])
                || !is_a($array[$keys], 'MediaFile')
            ) {
                throw new MediaFileListNeedsMediaFileException(
                    'Constructor of MediaFileList can only use MediaFile objects'
                );
            }
        }
        $this->iteratorArray = $array;
        $this->hasItems = true;
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

    /**
     * Returns FALSE if list empty.
     * Returns TRUE if list not empty.
     *
     * @return bool
     */
    public function hasItems() : bool
    {
        return $this->hasItems;
    }

    /**
     * Return the default MediaFile.
     * The default thumb is the thumb of the default MediaFile.
     * Hardcoded: array index 0 holds the default MediaFile.
     *
     * @return MediaFile
     */
    public function getDefault(): MediaFile
    {
        return $this->getElement(0);
    }
}