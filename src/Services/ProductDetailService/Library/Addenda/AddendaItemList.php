<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 14.09.2016
 * Time: 11:55
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Library;


use Class152\PizzaMamamia\AbstractClasses\AbstractIterator;
use Class152\PizzaMamamia\Services\ProductDetailService\Exceptions\AddendaItemListNeedsAddendaItemsException;
use Class152\PizzaMamamia\Services\ProductDetailService\Library\Addenda\AddendaItem;

class AddendaItemList extends AbstractIterator
{
    /**
     * AddendaItemList constructor.
     * @param array|null $array
     * @throws \Class152\PizzaMamamia\Services\ProductDetailService\Exceptions\AddendaItemListNeedsAddendaItemsException
     */
	public function __construct(array $array = null)
	{
		if (is_null($array)) {
			return;
		}

		foreach (array_keys($array) as $keys) {
			if (
				!is_object($array[$keys])
				|| !is_a($array[$keys], 'AddendaItem')
			) {
				throw new AddendaItemListNeedsAddendaItemsException(
					'Constructor of AddendaItemList can only use AddendaItem objects.'
				);
			}
		}
		$this->iteratorArray = $array;
	}

	/**
	 * @param AddendaItem $AddendaItem
	 */	
	public function addItem(AddendaItem $AddendaItem)
	{
		$this->iteratorArray[] = $AddendaItem;
	}

	/**
	 * @return ComponentItem
	 */
	public function current() : ComponentItem
	{
		return parent::current();
	}
}