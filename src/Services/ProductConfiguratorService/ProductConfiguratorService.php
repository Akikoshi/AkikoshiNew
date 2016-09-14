<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 14.09.2016
 * Time: 10:23
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService;


use Class152\PizzaMamamia\Services\ProductConfiguratorService\Library\AllergenAdditiveItemList;
use Class152\PizzaMamamia\Services\ProductConfiguratorService\Library\ComponentItemList;
use Class152\PizzaMamamia\Services\ProductConfiguratorService\Library\ProductConfiguratorFactory;

class ProductConfiguratorService
{
	/**
	 * ToDo: return & comment
	 * Return list of all used ingredients (incl. list of available alternatives per item in list)
	 */
	public function getProductConfigurator() : ComponentItemList
	{
		$productConfiguratorFactory = new ProductConfiguratorFactory();
		
	}

	
}