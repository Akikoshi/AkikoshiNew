<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 13:53
	 */

	namespace Class152\PizzaMamamia\Services\ProductService\Library\Product;

	use Class152\PizzaMamamia\Services\ProductService\Repository\Entities\ProductEntity;
	use Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException;

	class Product
	{
		/** @var int */
		private $parentId;

		/** @var string */
		private $name;

		/** @var int  */
		private $productGroup;

		/** @var float  */

		private $GrossPrice;

		/** @var string */

		private $type;

		/**
		 * User constructor.
		 *
		 * @param \Class152\PizzaMamamia\Services\SessionService\SessionService $sessionService
		 */
		public function __construct( int $productid )
		{
			//$productentity=new ProductRepository->get
		//	$this->name = $userRow['name'];
			$this->parentId = $userRow['parentId'];
			$this->productGroup = $userRow['productGroup'];
			$this->GrossPrice = $userRow['GrossPrice'];
			$this->type = $userRow['type'];

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