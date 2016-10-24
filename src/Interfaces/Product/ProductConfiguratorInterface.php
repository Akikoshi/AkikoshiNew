<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 21.10.2016
	 * Time: 09:39
	 */

	namespace Class152\PizzaMamamia\Interfaces\Product;


	interface ProductConfiguratorInterface extends ProductDetailInformationsInterface
	{

		public function getAddons() : ProductComponentsListInterface;


	}