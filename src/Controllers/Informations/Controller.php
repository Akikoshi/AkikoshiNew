<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 05.09.2016
	 * Time: 14:30
	 */

	namespace Class152\PizzaMamamia\Controllers\Informations;


	use Class152\PizzaMamamia\AbstractClasses\AbstractController;
	use Class152\PizzaMamamia\Library\TwigRendering;


	class Controller extends AbstractController
	{
		/**
		 * shows start page
     */
		public function indexAction()
		{

			new TwigRendering(
				'Informations/index.twig',
				[
					'controllerName'=>'Informations',
					'actionName' => 'index',
				]
			);

		}


		
	}