<?php
	/**
	 * Created by PhpStorm.
	 * User: trentschc
	 * Date: 07.09.2016
	 * Time: 11:27
	 */

	namespace Class152\PizzaMamamia\Controllers\Account;


	use Class152\PizzaMamamia\AbstractClasses\AbstractController;
	use Class152\PizzaMamamia\Exception\RedirectException;
	use Class152\PizzaMamamia\Http\Request;
	use Class152\PizzaMamamia\Library\TwigRendering;
	use Class152\PizzaMamamia\Services\AccountService\AccountService;
	use Class152\PizzaMamamia\Services\SessionService\SessionService;
	use Class152\PizzaMamamia\Services\MenuService\MenuService;
	use Class152\PizzaMamamia\Services\UserService\Exceptions\EmptyLoginVarsException;
	use Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException;
	use Class152\PizzaMamamia\Services\UserService\UserService;


	class Controller extends AbstractController
	{
		/** @var AccountService */
		private $accountService;

		/** @var MenuService */
		private $mainMenu;
		private $accountMenu;
		private $footerMenu;
		private $breadCrumb;
		private $accountSidebar;
		private $controllerName;

		public function __construct( Request $request, SessionService $sessionService )
		{
			try {
				$this->accountService = new AccountService( $sessionService );
			}
			catch ( NotLoggedInException $exception ) {
				new TwigRendering(
					'Account/login.twig',
					[

					]
				);

				return;
			}

			$this->controllerName = 'Account';
			$menuService = new MenuService( $request );
			$this->mainMenu = $menuService->getMainMenu();
			$this->accountMenu = $menuService->getAccountMenu();
			$this->footerMenu = $menuService->getFooterMenu();
			$this->breadCrumb = $menuService->getBreadcrumbMenu();
			$this->accountSidebar = $this->accountService->getSidebarMenu();
			parent::__construct( $request, $sessionService );
		}


		private function getTwigRendering( $actionName )
		{

			new TwigRendering(
				$this->controllerName . '/' . $actionName . '.twig',
				[
					'controllerName' => $this->controllerName,
					'actionName'     => $actionName,
					'mainMenu'       => $this->mainMenu,
					'footerMenu'     => $this->footerMenu,
					'accountMenu'    => $this->accountMenu,
					'breadcrumbMenu' => $this->breadCrumb,
					'accountSidebar' => $this->accountSidebar,
					'userAccount'    => $this->accountService->getUser(),
				]
			);

		}


		public function indexAction()
		{
			$this->getTwigRendering( 'index' );


		}

		/**
		 * @throws \Class152\PizzaMamamia\Exception\RedirectException
		 */
		public function loginAction()
		{
			$redirect = '/';
			try {
				$loginVars = new LoginActionVars( $_POST, $_SERVER['HTTP_REFERER'] );
				$redirect = $loginVars->getRedirectUrl();
				$userService = new UserService( $this->sessionService );
				$userService->logInTheUser(
					$loginVars->getUsername(),
					$loginVars->getPassword()
				);
				$this->redirect($redirect);
			}
			catch ( EmptyLoginVarsException $e ) {
				$this->redirect($redirect);
			}
			catch ( NotLoggedInException $e ) {
				$this->redirect($redirect);
			}

		}

		public function logoutAction()
		{
			$logoutVars = new LogoutActionVars( $_SERVER['HTTP_REFERER'] );
			$redirect = $logoutVars->getRedirectUrl();
			$userService = new UserService( $this->sessionService );
			$userService->logoutTheUser();
			$this->redirect($redirect);
		}

		private function redirect( string $url )
		{
			// $redirect = new PizzaProjectException();
			$redirect = new RedirectException();
			$redirect->setRedirectUrl( $url );
			throw $redirect;

		}

		public function userconfigAction()
		{
			$this->getTwigRendering( 'userconfig' );
		}

		public function lostpasswordAction()
		{

			$this->getTwigRendering( 'lostpassword' );

		}

		public function registerAction()
		{

			$this->getTwigRendering( 'register' );

		}

		public function deleteuserAction()
		{

        $this->getTwigRendering('deleteuser');


		}

		public function lastordersAction()
		{


        $this->getTwigRendering('lastorders');

		}

		public function specialoffersAction()
		{

			$this->getTwigRendering( 'specialoffers' );

		}

    public function favoritesAction()
    {
        $this->getTwigRendering('favorites');

		}

	}