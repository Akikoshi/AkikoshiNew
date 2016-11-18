<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 04.11.2016
 * Time: 10:46
 */
namespace Class152\PizzaMamamia\Interfaces;

interface MediaFileListInterface extends AbstractIteratorInterface
{
    /**
     * overloads the current method for restricted type of return value
     *
     * @return MediaFileInterface
     */
    public function current() : MediaFileInterface;

    /**
     * @param null $key
     * @return MediaFileListInterface
     */
    public function getElement($key = null) : MediaFileListInterface;

    /**
     * Returns FALSE if list empty.
     * Returns TRUE if list not empty.
     *
     * @return bool
     */
    public function hasItems() : bool;

    /**
     * Return the default MediaFile.
     * The default thumb is the thumb of the default MediaFile.
     *
     * @return MediaFileInterface
     */
    public function getDefault(): MediaFileInterface;
}