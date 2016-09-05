<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 05.09.2016
	 * Time: 14:39
	 */

	namespace Class152\PizzaMamamia\Interfaces;


	use Class152\PizzaMamamia\Http\Request;

	interface ControllerInterface
	{
		/**
		 * ControllerInterface constructor.
		 *
		 * @param Request $request
		 */
		public function __construct( Request $request );

		/**
		 * shows an default page
		 */
		public function indexAction();
	}