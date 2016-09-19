<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 09:27
	 */

	namespace Class152\PizzaMamamia\Configurations;


	use Class152\PizzaMamamia\Database\MySql;

	class MySqlConfig
	{

		/**
		 * @return string
		 */
		public static function getUser()
		{
			return 'root';
		}

		/**
		 * @return string
		 */
		public static function getHost()
		{
			return '127.0.0.1';
		}

		/**
		 * @return string
		 */
		public static function getPasswd()
		{
			return 'vagrant';
		}

		/**
		 * @return int
		 */
		public static function getPort()
		{
			return 3306;
		}

		/**
		 * @return string
		 */
		public static function getDbName()
		{
			return 'vagrant';
		}
	}