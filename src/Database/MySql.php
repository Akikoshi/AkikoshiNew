<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 09:17
	 */

	namespace Class152\PizzaMamamia\Database;

	use Class152\PizzaMamamia\Configurations\MySqlConfig;
	use Class152\PizzaMamamia\Database\Exceptions\MySqlConnectException;

	class MySql // extends \MySqli
	{
		/** @var \MySqli*/
		private static $db;

		/**
		 * MySql constructor.
		 *
		 * @throws \Class152\PizzaMamamia\Database\Exceptions\MySqlConnectException
		 */
		public function __construct()
		{

			if( ! is_null( self::$db ) ) return;

			self::$db = new \MySqli(
				MySqlConfig::getHost(),
				MySqlConfig::getUser(),
				MySqlConfig::getPasswd(),
				MySqlConfig::getDbName(),
				MySqlConfig::getPort()
			);

			if (self::$db->connect_error) {
				throw new MySqlConnectException(
					self::$db->connect_errno . " : " . self::$db->connect_error
				);
			}

			mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

		}

		/** @return \MySqli */
		public function getInstance() : \MySqli
		{
			return self::$db;
		}

	}