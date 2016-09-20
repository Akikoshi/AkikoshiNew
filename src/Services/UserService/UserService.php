<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 13:45
	 */

	namespace Class152\PizzaMamamia\Services\UserService;


	use Class152\PizzaMamamia\Services\SessionService\SessionService;
	use Class152\PizzaMamamia\Services\UserService\Interfaces\AccountSessionInterface;

	class UserService
	{
		/** @var SessionService */
		private $sessionService;

		public function __construct( AccountSessionInterface $sessionService )
		{
			$this->sessionService = $sessionService;
		}


	}