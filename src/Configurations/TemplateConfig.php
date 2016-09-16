<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 12.09.2016
	 * Time: 15:08
	 */

	namespace Class152\PizzaMamamia\Configurations;


	final class TemplateConfig
	{
		/**
		 * @return string
		 */
		public static function getPath()
		{
			return __DIR__ . "/../../Templates/Default";
		}
	}