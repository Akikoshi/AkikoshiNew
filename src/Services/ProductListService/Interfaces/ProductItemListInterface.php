<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 13:59
 */

namespace Class152\PizzaMamamia\Services\ProductService\Interfaces;


use Class152\PizzaMamamia\Services\ProductService\Library\ProductItem;

interface ProductItemListInterface
{
    /**
     * Move forward to next element
     *
     * @link  http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next();

    /**
     * Return the key of the current element
     *
     * @link  http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key();

    /**
     * Checks if current position is valid
     *
     * @link  http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     *        Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid() : bool;

    /**
     * Rewind the Iterator to the first element
     *
     * @link  http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind();

    /**
     * Count elements of an object
     *
     * @link  http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     *        </p>
     *        <p>
     *        The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count() : int;

    /**
     * Gets the name of keys as a array
     *
     * @return array
     */
    public function getKeys() : array;

    /**
     * @param mixed $key
     *
     * @return mixed|null
     */
    public function getElement( mixed $key = null );

    /**
     * MenuItemList constructor.
     * Checks the type of given items
     *
     * @param array|null $array
     *
     * @throws \Class152\PizzaMamamia\Services\MenuService\Exceptions\MenuItemListNeedsMenuItemsException
     */
    public function __construct( array $array = null );

    /**
     * adds a given MenuItem
     *
     * @param \Class152\PizzaMamamia\Services\ProductService\Library\ProductItem $productItem
     */
    public function addItem( ProductItem $productItem );

    /**
     * overloads the current method for restricted type of return value
     *
     * @return \Class152\PizzaMamamia\Services\ProductService\Library\ProductItem
     */
    public function current() : ProductItem;
}