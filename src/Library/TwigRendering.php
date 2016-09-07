<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 07.09.2016
	 * Time: 08:42
	 */

	namespace Class152\PizzaMamamia\Library;


	class TwigRendering
	{

		/** @var string */
		private $templatePath;

		public function __construct( string $template, array $variables )
		{

			$this->templatePath = __DIR__ . "/../../Templates/Default";
			$loader = new \Twig_Loader_Filesystem($this->templatePath);
			$twig = new \Twig_Environment($loader, array(
				// 'cache' => '/path/to/compilation_cache',
			));

			$template = $twig->loadTemplate($template);
			echo $template->render($variables);

		}

	}