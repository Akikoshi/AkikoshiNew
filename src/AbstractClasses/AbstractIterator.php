<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 08.09.2016
	 * Time: 13:40
	 */

	namespace Class152\PizzaMamamia\AbstractClasses;


	use Class152\PizzaMamamia\Interfaces\AbstractIteratorInterface;

	class AbstractIterator implements \Iterator, \Countable, AbstractIteratorInterface
	{

		/** @var array */
		protected $iteratorArray = [ ];

		/**
		 * ReadIterator constructor.
		 *
		 * @param array $array
		 */
		public function __construct( array $array )
		{
			$this->iteratorArray = $array;
		}

		/**
		 * Return the current element
		 *
		 * @link  http://php.net/manual/en/iterator.current.php
		 * @return mixed Can return any type.
		 * @since 5.0.0
		 */
		public function current()
		{
			return current( $this->iteratorArray );
		}

		/**
		 * Move forward to next element
		 *
		 * @link  http://php.net/manual/en/iterator.next.php
		 * @return void Any returned value is ignored.
		 * @since 5.0.0
		 */
		public function next()
		{
			next( $this->iteratorArray );
		}

		/**
		 * Return the key of the current element
		 *
		 * @link  http://php.net/manual/en/iterator.key.php
		 * @return mixed scalar on success, or null on failure.
		 * @since 5.0.0
		 */
		public function key()
		{
			return key( $this->iteratorArray );
		}

		/**
		 * Checks if current position is valid
		 *
		 * @link  http://php.net/manual/en/iterator.valid.php
		 * @return boolean The return value will be casted to boolean and then evaluated.
		 *        Returns true on success or false on failure.
		 * @since 5.0.0
		 */
		public function valid() : bool
		{
			if ( false === current( $this->iteratorArray ) ) {
				return false;
			}

			return true;
		}

		/**
		 * Rewind the Iterator to the first element
		 *
		 * @link  http://php.net/manual/en/iterator.rewind.php
		 * @return void Any returned value is ignored.
		 * @since 5.0.0
		 */
		public function rewind()
		{
			reset( $this->iteratorArray );
		}

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
		public function count() : int
		{
			return count( $this->iteratorArray );
		}

		/**
		 * Gets the name of keys as a array
		 *
		 * @return array
		 */
		public function getKeys() : array
		{
			return array_keys( $this->iteratorArray );
		}

		/**
		 * @param mixed $key
		 *
		 * @return mixed|null
		 */
		public function getElement( $key = null )
		{
			if ( !isset( $this->iteratorArray[ $key ] ) ) {
				return null;
			}

			return $this->iteratorArray[ $key ];
		}

	}