<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 07.09.2016
	 * Time: 08:42
	 */

	namespace Class152\PizzaMamamia\Library;


	use Class152\PizzaMamamia\Configurations\TemplateConfig;
	use Class152\PizzaMamamia\Services\AccountService\AccountService;
	use Class152\PizzaMamamia\Services\SessionService\SessionService;

	class TwigRendering
	{

		/** @var string */
		private $templatePath;

		public function __construct( string $template, array $variables )
		{

			$this->templatePath = TemplateConfig::getPath();
			$loader = new \Twig_Loader_Filesystem($this->templatePath);

			$variables['isLoggedIn'] = ( new SessionService() )->getUserAccount()->isLoggedIn();

			$twig = new \Twig_Environment($loader, array(
				// 'cache' => '/path/to/compilation_cache',
			));

			$template = $twig->loadTemplate($template);
			echo $template->render($variables);

		}

	}