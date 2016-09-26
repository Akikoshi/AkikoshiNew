<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 05.09.2016
	 * Time: 14:39
	 */

	namespace Class152\PizzaMamamia\Interfaces;


	use Class152\PizzaMamamia\Http\Request;
	use Class152\PizzaMamamia\Services\SessionService\SessionService;

	interface ControllerInterface
	{
		/**
		 * ControllerInterface constructor.
		 *
		 * @param \Class152\PizzaMamamia\Http\Request              $request
		 * @param \Class152\PizzaMamamia\Interfaces\SessionService $sessionService
		 */
		public function __construct( Request $request, SessionService $sessionService );

		/**
		 * shows an default page
		 */
		public function indexAction();
	}