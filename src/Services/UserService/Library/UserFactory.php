<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 13:53
	 */

	namespace Class152\PizzaMamamia\Services\UserService\Library;


	use Class152\PizzaMamamia\Services\SessionService\SessionService;

	class UserFactory
	{
		/** @var User */
		private $user;

		/**
		 * UserFactory constructor.
		 *
		 * @param \Class152\PizzaMamamia\Services\SessionService\SessionService $sessionService
		 */
		public function __construct( SessionService $sessionService )
		{
			$this->user = new User($sessionService);
		}

		/**
		 * @return \Class152\PizzaMamamia\Services\UserService\Library\User
		 */
		public function getUser()
		{
			return $this->user;
		}

	}