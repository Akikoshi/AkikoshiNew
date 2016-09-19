<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 14:23
	 */

	namespace Class152\PizzaMamamia\Services\UserService\Repository;


	use Class152\PizzaMamamia\Database\MySql;

	class UserRepository
	{
		/** @var Mysql */
		private $db;

		public function __construct()
		{
			$db = new MySql();
			$this->db = $db->getInstance();
		}

		/**
		 * @param string $userName
		 * @param string $password
		 *
		 * @return array
		 */
		public function login( string $userName, string $password )
		{
			$sql = "SELECT * FROM User WHERE username = '"
			. $this->db->escape_string( $userName ) . "' AND password = '"
			. $this->db->escape_string( $password ) . "' LIMIT 1;";
			$result = $this->db->query( $sql );
			$user = $result->fetch_assoc();
			return $user;
		}

	}