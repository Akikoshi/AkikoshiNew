<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 07.09.2016
	 * Time: 09:10
	 */

	namespace Class152\PizzaMamamia\AbstractClasses;

	use Class152\PizzaMamamia\Http\Request;
	use Class152\PizzaMamamia\Interfaces\ControllerInterface;
	use Class152\PizzaMamamia\Library\TwigRendering;
	use Class152\PizzaMamamia\Services\SessionService\SessionService;

	abstract class AbstractController implements ControllerInterface
	{
		/** @var Request */
		protected $request;

		/** @var SessionService */
		protected $sessionService;

		/**
		 * Controller constructor.
		 *
		 * @param \Class152\PizzaMamamia\Http\Request $request
		 */
		public function __construct( Request $request, SessionService $sessionService )
		{
			$this->request = $request;
			$this->sessionService = $sessionService;
		}

		public function indexAction()
		{
			new TwigRendering(
				'index.twig',
				[
					'controllerName'=>'Home',
					'actionName' => 'index',
				]
			);
		}
		
	}