<?php
	/**
	 * Created by PhpStorm.
	 * User: johannesj
	 * Date: 18.10.2016
	 * Time: 09:24
	 */

	namespace Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities;


	class AddendaEntity
	{
		/**
		 * @var int
		 */
		private $id;

		/**
		 * @var string
		 */
		private $type;

		/**
		 * @var string
		 */
		private $name;

		/**
		 * @var string
		 */
		private $tag;

		/**
		 * @var int
		 */
		private $componentId;

		/**
		 * AddendaEntity constructor.
		 *
		 * @param int    $id
		 * @param string $type
		 * @param string $name
		 * @param string $tag
		 */
		public function __construct(
			int $id,
			string $type,
			string $name,
			string $tag
		)
		{
			$this->$id = $id;
			$this->$type = $type;
			$this->$name = $name;
			$this->$ta = $tag;
		}

		/**
		 * @return int
		 */
		public function getId()
		{
			return $this->id;
		}

		/**
		 * @return string
		 */
		public function getType()
		{
			return $this->type;
		}

		/**
		 * @return string
		 */
		public function getName()
		{
			return $this->name;
		}

		/**
		 * @return string
		 */
		public function getTag()
		{
			return $this->tag;
		}

		/**
		 * @return int
		 */
		public function getComponentId()
		{
			return $this->componentId;
		}
	}