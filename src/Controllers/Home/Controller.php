<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 05.09.2016
	 * Time: 14:30
	 */

	namespace Class152\PizzaMamamia\Controllers\Home;


	use Class152\PizzaMamamia\AbstractClasses\AbstractController;
	use Class152\PizzaMamamia\Library\TwigRendering;

	class Controller extends AbstractController
	{
		public function indexAction()
		{
			new TwigRendering(
				'Home/index.twig',
				[
					'controllerName'=>'Home',
					'actionName' => 'index',
				]
			);
		}

	}