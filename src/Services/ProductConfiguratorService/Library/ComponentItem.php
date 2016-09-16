<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 14.09.2016
 * Time: 11:50
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Library;


class ComponentItem
{
	/**
	 * @var int
	 */
	private $id;
	
	/**
	 * @var string
	 * Hold the name of the component.
	 */
	private $name;

	/**
	 * @var string
	 * Hold the category (-Group) of the component.
	 */
	private $category;

	/**
	 * @var string
	 * Hold the Path to a icon or image of the component.
	 */
	private $iconPath;

	/**
	 * @var float
	 * Hold the numeric price of the component.
	 */
	private $price;

	/**
	 * @var AllergenAdditiveItemList
	 * Hold the list of all additives of the component.
	 */
	private $additiveList;

	/**
	 * @var AllergenAdditiveItemList
	 * Hold the list of all allergens of the component.
	 */
	private $allergenList;

	/**
	 * @var ComponentItemList
	 * Hold a list of alternative items, if the component marked as replaceable.
	 * Default := null
	 */
	private $replaceableItemList;

	/**
	 * @var bool
	 * Hold the information, is the component removable. true := Yes | false := No
	 * Default := false
	 */
	private $removable;

	/**
	 * @var bool
	 * Hold the information, is the component replaceable. true := Yes | false := No
	 * Default := false
	 * Internal-Function: set to TRUE when $replaceableItemList got filled with a ItemList
	 */
	private $replaceable = false;

	/**
	 * ComponentItem constructor.
	 * @param string $name
	 * @param string $category
	 * @param string $iconPath
	 * @param float $price
	 * @param AllergenAdditiveItemList $additiveList
	 * @param AllergenAdditiveItemList $allergenList
	 * @param ComponentItemList|null $replaceableList
	 * @param bool $removable
	 */
	public function __construct(int $id,
								string $name,
								string $category,
								string $iconPath,
								float $price,
								AllergenAdditiveItemList $additiveList,
								AllergenAdditiveItemList $allergenList,
								ComponentItemList $replaceableList = null,
								bool $removable = false
	)
	{
		$this->id			= $id;
		$this->name 		= $name;
		$this->category 	= $category;
		$this->iconPath 	= $iconPath;
		$this->price 		= $price;
		$this->removable 	= $removable;
		$this->additiveList = $additiveList;
		$this->allergenList = $allergenList;

		if ($replaceableList instanceof ComponentItemList)
		{
			$this->replaceableItemList = $replaceableList;
			$this->replaceable = true;
		} 
	}

	/**
	 * @return string
	 * Returns the name of this component.
	 */
	public function getName() : string
	{
		return $this->name;
	}

	/**
	 * @return string
	 * Returns the category of this component.
	 */
	public function getCategory() : string
	{
		return $this->category;
	}

	/**
	 * @return string
	 * Returns the Path to a icon or image of this component.
	 */
	public function getIconPath() : string
	{
		return $this->iconPath;
	}

	/**
	 * @return float
	 * Returns the price of this component.
	 */
	public function getPrice() : float
	{
		return $this->price;
	}

	/**
	 * @return AllergenAdditiveItemList
	 * Returns the list of additives of this component.
	 */
	public function getAdditiveList() : AllergenAdditiveItemList
	{
		return $this->additiveList;
	}

	/**
	 * @return AllergenAdditiveItemList
	 * Returns the list of allergens of this component.
	 */
	public function getAllergenList() : AllergenAdditiveItemList
	{
		return $this->allergenList;
	}

	/**
	 * @return ComponentItemList
	 * Returns a list of alternative components for this component.
	 */
	public function getReplaceableItemList() : ComponentItemList
	{
		return $this->replaceableItemList;
	}

	/**
	 * @return boolean
	 * Returns the information, is this component removable. true := Yes | false := No
	 */
	public function isRemovable() : bool
	{
		return $this->removable;
	}

	/**
	 * @return boolean
	 * Returns the information, is this component replaceable. true := Yes | false := No
	 */
	public function isReplaceable() : bool
	{
		return $this->replaceable;
	}
}