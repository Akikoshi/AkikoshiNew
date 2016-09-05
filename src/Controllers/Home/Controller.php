<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 05.09.2016
	 * Time: 14:30
	 */

	namespace Class152\PizzaMamamia\Controllers\Home;


	use Class152\PizzaMamamia\Http\Request;

	class Controller
	{
		/** @var Request */
		protected $request;

		/**
		 * Controller constructor.
		 *
		 * @param \Class152\PizzaMamamia\Http\Request $request
		 */
		public function __construct( Request $request )
		{
			$this->request = $request;
		}

		public function indexAction()
		{
			echo __METHOD__ . "<br />";
		}

	}