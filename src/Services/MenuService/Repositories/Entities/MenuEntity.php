<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 10:40
	 */

	namespace Class152\PizzaMamamia\Services\MenuService\Repositories\Entities;


	class MenuEntity
	{
		/** @var int */
		private $id; // ` int(10) UNSIGNED NOT NULL,

		/** @var int */
		private $parentID; //` int(11) DEFAULT NULL,

		/** @var int */
		private $Position;

		/** @var string */
		private $name; // ` varchar(255) COLLATE utf8_bin NOT NULL,

		/** @var string */
		private $url;

		/**
		 * Menues constructor.
		 *
		 * @param int    $id
		 * @param int    $parentID
		 * @param string $name
		 * @param string $url
		 */
		public function __construct( $id, $parentID, $position, $name, $url )
		{
			$this->id = $id;
			$this->parentID = $parentID;
			$this->Position = $position;
			$this->name = $name;
			$this->url = $url;
		}

		/**
		 * @return int
		 */
		public function getId(): int
		{
			return $this->id;
		}

		/**
		 * @return int
		 */
		public function getParentID(): int
		{
			return $this->parentID;
		}

		/**
		 * @return int
		 */
		public function getPosition(): int
		{
			return $this->Position;
		}

		/**
		 * @return string
		 */
		public function getName(): string
		{
			return $this->name;
		}

		/**
		 * @return string
		 */
		public function getUrl(): string
		{
			return $this->url;
		}

		/**
		 * @param int $id
		 */
		public function setId( int $id )
		{
			$this->id = $id;
		}

		/**
		 * @param int $parentID
		 */
		public function setParentID( int $parentID )
		{
			$this->parentID = $parentID;
		}

		/**
		 * @param string $name
		 */
		public function setName( string $name )
		{
			$this->name = $name;
		}

		/**
		 * @param string $url
		 */
		public function setUrl( string $url )
		{
			$this->url = $url;
		}





	}