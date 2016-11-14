<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 21.10.2016
	 * Time: 09:23
	 */

	namespace Class152\PizzaMamamia\Interfaces\Product;


	use Class152\PizzaMamamia\Interfaces\AbstractIteratorInterface;

    /**
	 * Interface ProductAddendaListInterface
	 * TODO: implement addItem method
	 *
	 * @package Class152\PizzaMamamia\Interfaces\Product
	 */
	interface ProductAddendaListInterface extends AbstractIteratorInterface
	{
        /**
         * @return ProductAddendaInterface
         */
        public function current() : ProductAddendaInterface;

        /**
         * @param null|string|int $key
         * @return ProductAddendaInterface
         */
        public function getElement($key = null) : ProductAddendaInterface;
    }