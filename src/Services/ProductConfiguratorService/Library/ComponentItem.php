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
	 * @param string $inName
	 * @param string $inCategory
	 * @param string $inIconPath
	 * @param float $inPrice
	 * @param AllergenAdditiveItemList $inAdditiveList
	 * @param AllergenAdditiveItemList $inAllergenList
	 * @param ComponentItemList|null $inReplaceableList
	 * @param bool $inRemovable
	 */
	public function __construct(string $inName,
								string $inCategory,
								string $inIconPath,
								float $inPrice,
								AllergenAdditiveItemList $inAdditiveList,
								AllergenAdditiveItemList $inAllergenList,
								ComponentItemList $inReplaceableList = null,
								bool $inRemovable = false
	)
	{
		$this->name = $inName;
		$this->category = $inCategory;
		$this->iconPath = $inIconPath;
		$this->price = $inPrice;
		$this->removable = $inRemovable;
		$this->additiveList = $inAdditiveList;
		$this->allergenList = $inAllergenList;

		if ($inReplaceableList instanceof ComponentItemList)
		{
			$this->replaceableItemList = $inReplaceableList;
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