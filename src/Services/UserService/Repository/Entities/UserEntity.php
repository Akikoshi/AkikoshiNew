<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 22.09.2016
	 * Time: 13:19
	 */

	namespace Class152\PizzaMamamia\Services\UserService\Repository\Entities;
	//TODO : userrow austauscchen durch einzelne variablen bei uebergabe
	class UserEntity
	{
		/** @var int */
		private $id;

		/** @var string */
		private $name;

		/**
		 * UserEntity constructor.
		 *
		 * @param array $userRow
		 */
		public function __construct( array $userRow )
		{
			$this->id = $userRow['id'];
			$this->name = $userRow['name'];
		}

		/**
		 * @return int
		 */
		public function getId(): int
		{
			return $this->id;
		}

		/**
		 * @return string
		 */
		public function getName(): string
		{
			return $this->name;
		}


	}