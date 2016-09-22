<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 21.09.2016
	 * Time: 08:58
	 */

	namespace Class152\PizzaMamamia\Controllers\Account;


	use Class152\PizzaMamamia\Services\UserService\Exceptions\EmptyLoginVarsException;

	final class LoginActionVars
	{
		/** @var string */
		private $username;

		/** @var string */
		private $password;

		/** @var string */
		private $redirectUrl;

		/** @var bool */
		private $hasLoginData = false;

		/**
		 * LoginActionVars constructor.
		 */
		public function __construct( array $postVars, string $referer )
		{
			$this->redirectUrl = ( isset( $referer ) ? $referer : '/' );

			$username = ( isset( $postVars['username'] ) ? $postVars['username'] : null );
			$password = ( isset( $postVars['password'] ) ? $postVars['password'] : null );

			if(
				! is_string( $username )
				|| empty( $username )
				|| ! is_string( $password )
				|| empty( $password )
			)
			{
				throw new EmptyLoginVarsException('no login datas');
			}

			$this->username = $username;
			$this->password = $password;
			$this->hasLoginData = true;

		}

		/**
		 * @return string
		 */
		public function getUsername(): string
		{
			return $this->username;
		}

		/**
		 * @return string
		 */
		public function getPassword(): string
		{
			return $this->password;
		}

		/**
		 * @return string
		 */
		public function getRedirectUrl(): string
		{
			return $this->redirectUrl;
		}

		/**
		 * @return boolean
		 */
		public function hasLoginData(): bool
		{
			return $this->hasLoginData;
		}


	}