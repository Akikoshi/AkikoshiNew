<?php
	/**
	 * Created by PhpStorm.
	 * User: frankenfeldtp
	 * Date: 25.10.2016
	 * Time: 09:22
	 */

	namespace Class152\PizzaMamamia\Services\ProductDetailService\Library\Addenda;


	class AddendaItem
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
		 * AddendaItem constructor.
		 *
		 * @param int    $id
		 * @param string $type
		 * @param string $name
		 * @param string $tag
		 * @param int    $componentId
		 */
		public function __construct(
			int $id,
			string $type,
			string $name,
			string $tag,
			int $componentId
		)
		{
			$this->id = $id;
			$this->type = $type;
			$this->name = $name;
			$this->tag = $tag;
			$this->componentId = $componentId;
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