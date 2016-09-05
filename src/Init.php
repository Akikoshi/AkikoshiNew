<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 31.08.2016
	 * Time: 08:21
	 */

	namespace Class152\PizzaMamamia;


	use Class152\PizzaMamamia\ControllerFactory\ControllerFactory;
	use Class152\PizzaMamamia\Exception\NotFoundException;
	use Class152\PizzaMamamia\Http\Request;

	class Init
	{

		public function __construct()
		{
			try {
				$request = new Request($_SERVER['REQUEST_URI']);
				$controller = new ControllerFactory( __NAMESPACE__, $request );
			}
			catch ( NotFoundException $exception )
			{
				echo "Uri not found - ToDo: ErrorPage<br />";
			}
		}
	}