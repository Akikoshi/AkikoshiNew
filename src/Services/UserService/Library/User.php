<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 13:53
	 */

	namespace Class152\PizzaMamamia\Services\UserService\Library;


	use Class152\PizzaMamamia\Services\SessionService\SessionService;
	use Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException;

	class User
	{
		private $userAccount;

		/** @var bool */
		private $isLoggedIn = false;

		/** @var string */
		private $name;

		/** @var string */
		private $email;

		/** @var int */
		private $userId;

		/** @var string */
		private $userName;

		/**
		 * @return boolean
		 */
		public function isIsLoggedIn(): bool
		{
			return $this->isLoggedIn;
		}

		/**
		 * User constructor.
		 *
		 * @param \Class152\PizzaMamamia\Services\SessionService\SessionService $sessionService
		 */
		public function __construct( SessionService $sessionService )
		{
			$this->userAccount = $sessionService->getUserAccount();
			$isLoggedIn = $this->userAccount->isLoggedIn();
			if( true === $isLoggedIn )
			{
				$this->isLoggedIn = $this->userAccount->isLoggedIn();
				$this->email = $this->userAccount->getEmail();
				$this->userId = $this->userAccount->getUserId();
				$this->userName = $this->userAccount->getUserName();
			}
		}

		/**
		 * @return bool
		 */
		public function isLoggedIn() : bool
		{
			return $this->isLoggedIn;
		}

		/**
		 * @return string
		 * @throws \Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException
		 */
		public function getName() : string
		{
			if( false === $this->isLoggedIn )
			{
				throw new NotLoggedInException();
			}
			return $this->name;
		}

		/**
		 * @return \Class152\PizzaMamamia\Services\SessionService\Library\UserAccount
		 * @throws \Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException
		 */
		public function getUserAccount(): \Class152\PizzaMamamia\Services\SessionService\Library\UserAccount
		{
			if( false === $this->isLoggedIn )
			{
				throw new NotLoggedInException();
			}
			return $this->userAccount;
		}

		/**
		 * @return string
		 * @throws \Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException
		 */
		public function getEmail(): string
		{
			if( false === $this->isLoggedIn )
			{
				throw new NotLoggedInException();
			}
			return $this->email;
		}

		/**
		 * @return int
		 * @throws \Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException
		 */
		public function getUserId(): int
		{
			if( false === $this->isLoggedIn )
			{
				throw new NotLoggedInException();
			}
			return $this->userId;
		}

		/**
		 * @return string
		 * @throws \Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException
		 */
		public function getUserName(): string
		{
			if( false === $this->isLoggedIn )
			{
				throw new NotLoggedInException();
			}
			return $this->userName;
		}

	}