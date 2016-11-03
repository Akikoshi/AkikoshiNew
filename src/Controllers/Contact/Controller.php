<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 05.09.2016
	 * Time: 14:30
	 */

	namespace Class152\PizzaMamamia\Controllers\Contact;


	use Class152\PizzaMamamia\AbstractClasses\AbstractController;
    use Class152\PizzaMamamia\Exception\FormValidationFailedException;
    use Class152\PizzaMamamia\Library\TwigRendering;
    use Class152\PizzaMamamia\Services\MenuService\MenuService;

    class Controller extends AbstractController
	{
		public function indexAction()
		{
            $template = 'Contact/index.twig';
            $postVars = null;

            try {
                $postVars = new ContactFormularPostVars($_POST);
            } catch (FormValidationFailedException $e) {
                $template = 'Contact/error.twig';
            }

            if (!is_null($postVars) && $postVars->isSent() && $postVars->isValid()) {
                // Formular wegschreiben
                // $writeService = new WriteService();
                // $writeService->save( $postVars );
            }

			$menuService = new MenuService($this->request);
			$mainMenu = $menuService->getMainMenu();
			$accountMenu = $menuService->getAccountMenu();
			$footerMenu = $menuService->getFooterMenu();
			$breadcrumbMenu = $menuService->getBreadcrumbMenu();
			

			new TwigRendering(
                $template,
				[
					'controllerName'=>'Contact',
					'actionName' => 'index',
					'mainMenu' => $mainMenu,
					'footerMenu' => $footerMenu,
					'accountMenu' => $accountMenu,
					'breadcrumbMenu' => $breadcrumbMenu,
				]
			);
		}
	}