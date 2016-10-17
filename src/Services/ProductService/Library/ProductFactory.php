<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 13:53
	 */

	namespace Class152\PizzaMamamia\Services\UserService\Library;


	use Class152\PizzaMamamia\Services\SessionService\Library\UserAccount;
	use Class152\PizzaMamamia\Services\SessionService\SessionService;
	use Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException;
	use Class152\PizzaMamamia\Services\UserService\Repository\UserRepository;

	class UserFactory
	{
		/** @var User */
		private $user;

		/** @var SessionService */
		private $sessionService;

		/**
		 * UserFactory constructor.
		 *
		 * @param \Class152\PizzaMamamia\Services\SessionService\SessionService $sessionService
		 */
		public function __construct( SessionService $sessionService )
		{
			$this->user = new User($sessionService);
			$this->sessionService = $sessionService;
		}

		/**
		 * @param string $username
		 * @param string $password
		 *
		 * @return \Class152\PizzaMamamia\Services\UserService\Library\User
		 */
		public function loginUser( string $username, string $password )
		{
			$userAccount = $this->sessionService->getUserAccount();

			if( true === $userAccount->isLoggedIn() )
			{
				return $this->user;
			}

			$repository = new UserRepository();
			$userEntity = $repository->login( $username, $password );
			$userAccount->setUserId( $userEntity->getId() );
			$userAccount->setUserName( $userEntity->getName() );
			$this->user = new User($this->sessionService);
		}

		public function logoutUser()
		{
			$userAccount = $this->sessionService->getUserAccount();
			$userAccount->reset();
			$this->user = new User($this->sessionService);
		}

		/**
		 * @return \Class152\PizzaMamamia\Services\UserService\Library\User
		 */
		public function getUser()
		{
			return $this->user;
		}

	}