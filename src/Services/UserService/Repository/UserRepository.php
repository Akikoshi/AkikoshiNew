<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 14:23
	 */

	namespace Class152\PizzaMamamia\Services\UserService\Repository;


	use Class152\PizzaMamamia\Database\MySql;
	use Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException;
	use Class152\PizzaMamamia\Services\UserService\Repository\Entities\UserEntity;

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
		 * @return \Class152\PizzaMamamia\Services\UserService\Repository\Entities\UserEntity
		 * @throws \Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException
		 */
		public function login( string $userName, string $password ) : UserEntity
		{
			$sql = "SELECT id, name FROM User WHERE username = '"
			. $this->db->escape_string( $userName ) . "' AND password = '"
			. $this->db->escape_string( $password ) . "' LIMIT 1;";
			$result = $this->db->query( $sql );
			$user = $result->fetch_assoc();
			if( empty($user) )
			{
				throw new NotLoggedInException('Login failed');
			}
			return new UserEntity( $user );
		}

	}