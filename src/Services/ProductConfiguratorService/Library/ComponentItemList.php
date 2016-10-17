<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 14.09.2016
 * Time: 11:55
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Services\ProductConfiguratorService\Exceptions\ComponentItemListNeedsComponentItemsException;

class ComponentItemList extends AbstractIterator
{
	/**
	 * ComponentItemList constructor.
	 * @param array $array
	 * @throws \Class152\PizzaMamamia\Services\ProductConfiguratorService\Exceptions\ComponentItemListNeedsComponentItemsException
	 */
	public function __construct(array $array = null)
	{
		if (is_null($array)) {
			return;
		}

		foreach (array_keys($array) as $keys) {
			if (
				!is_object($array[$keys])
				|| !is_a($array[$keys], 'ComponentItem')
			) {
				throw new ComponentItemListNeedsComponentItemsException(
					'Constructor of ComponentList can only use ComponentItem objects.'
				);
			}
		}
		$this->iteratorArray = $array;
	}

	/**
	 * @param ComponentItem $componentItem
	 * Add a ComponentItem to the List
	 */
	public function addItem(ComponentItem $componentItem)
	{
		$this->iteratorArray[] = $componentItem;
	}

	/**
	 * overloads the current method for restricted type of return value
	 *
	 * @return \Class152\PizzaMamamia\Services\ProductConfiguratorService\Library\ComponentItem
	 */
	public function current() : ComponentItem
	{
		return parent::current();
	}
}