<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 13:45
	 */

	namespace Class152\PizzaMamamia\Services\UserService;


	use Class152\PizzaMamamia\Services\SessionService\SessionService;
	use Class152\PizzaMamamia\Services\UserService\Library\User;
	use Class152\PizzaMamamia\Services\UserService\Library\UserFactory;

	class UserService
	{
		/** @var SessionService */
		private $sessionService;

		/** @var UserFactory */
		private $userFactory;

		/** @var User */
		private $user;

		public function __construct( SessionService $sessionService )
		{
			$this->sessionService = $sessionService;


		}

		/**
		 * @param string $username
		 * @param string $password
		 *
		 * @return \Class152\PizzaMamamia\Services\UserService\Library\User
		 */
		public function logInTheUser( string $username, string $password ) : User
		{
			$this->createUserFactory();
			$this->userFactory->loginUser( $username, $password );
			return $this->userFactory->getUser();
		}

		public function logOutTheUser()
		{
			$this->createUserFactory();
			$this->userFactory->logoutUser();
			return $this->userFactory->getUser();
		}

		public function getUser()
		{
			$this->createUserFactory();
			return $this->userFactory->getUser();
		}

		private function createUserFactory()
		{
			if( ! is_null( $this->user ) ) return;
			$this->userFactory = new UserFactory( $this->sessionService );
		}


	}