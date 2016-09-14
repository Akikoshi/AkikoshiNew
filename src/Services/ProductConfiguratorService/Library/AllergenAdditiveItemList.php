<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 14.09.2016
 * Time: 11:50
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Services\ProductConfiguratorService\Exceptions\AllergenAdditiveItemListNeedsAllergenAdditiveItemsException;

class AllergenAdditiveItemList extends AbstractIterator
{
	/**
	 * AllergenAdditiveItemList constructor.
	 * @param array $array
	 * @throws \Class152\PizzaMamamia\Services\ProductConfiguratorService\Exceptions\AllergenAdditiveItemListNeedsAllergenAdditiveItemsException
	 */
	public function __construct(array $array = null)
	{
		if (is_null($array)) {
			return;
		}

		foreach (array_keys($array) as $keys) {
			if (
				!is_object($array[$keys])
				|| !is_a($array[$keys], 'AllergenAdditiveItem')
			) {
				throw new AllergenAdditiveItemListNeedsAllergenAdditiveItemsException(
					'Constructor of AllergenAdditiveItemList can only use ComponentItem objects.'
				);
			}
		}
		$this->iteratorArray = $array;
	}

	/**
	 * @param AllergenAdditiveItem $inAllergenAdditiveItem
	 * Add a ComponentItem to the List
	 */
	public function addItem(AllergenAdditiveItem $inAllergenAdditiveItem)
	{
		$this->iteratorArray[] = $inAllergenAdditiveItem;
	}

	/**
	 * overloads the current method for restricted type of return value
	 *
	 * @return \Class152\PizzaMamamia\Services\ProductConfiguratorService\Library\AllergenAdditiveItem
	 */
	public function current() : AllergenAdditiveItem
	{
		return parent::current();
	}

}