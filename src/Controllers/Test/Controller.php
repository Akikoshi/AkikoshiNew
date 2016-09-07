<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 07.09.2016
	 * Time: 09:12
	 */

	namespace Class152\PizzaMamamia\Controllers\Test;


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