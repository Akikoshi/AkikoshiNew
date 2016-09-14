<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 14.09.2016
 * Time: 11:57
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Library;


class ProductConfiguratorFactory
{

	/** ToDo:Complete this Class */

	/**
	 * @var ProductConfiguratorData
	 * Data-Holder for all product-configurator-data
	 */
	private $configuratorData;

	/**
	 * @var integer
	 */
	private $productId;

	/**
	 * ProductConfiguratorFactory constructor.
	 * @param int $inProductId
	 */
	public function __construct(integer $inProductId)
	{
		$this->productId = $inProductId;

		/* ToDo: implement the logic */
		
		return $this->configuratorData;
	}
}