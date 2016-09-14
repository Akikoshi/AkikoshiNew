<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 14.09.2016
 * Time: 15:41
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Library;


class ProductConfiguratorData
{
	/* ToDo: complete this DATA-Class */
	/* Data-Class to hold all Information for the Product-Configurator */
	
	/**
	 * @var ComponentItemList
	 * Hold all used ingredients (components) of the product.
	 */
	private $usedIngredientList;

	/**
	 * @var ComponentItemList
	 * Hold all used add-ons (components) of the product.
	 */
	private $usedAddonList;

	/**
	 * @var ComponentItemList
	 * Hold all available add-ons (components) for this product.
	 */
	private $AddonList;

	/**
	 * @var AllergenAdditiveItemList
	 * Hold all additives (merged from all components) of the product.
	 */
	private $usedAdditiveList;

	/**
	 * @var AllergenAdditiveItemList
	 * Hold all allergens (merged from all components) of the product.
	 */
	private $usedAllergenList;

	
	
	
	/**
	 * @return ComponentItemList
	 */
	public function getUsedIngredientList()
	{
		return $this->usedIngredientList;
	}

	/**
	 * @param ComponentItemList $usedIngredientList
	 */
	public function setUsedIngredientList( $usedIngredientList )
	{
		$this->usedIngredientList = $usedIngredientList;
	}

	/**
	 * @return ComponentItemList
	 */
	public function getUsedAddonList()
	{
		return $this->usedAddonList;
	}

	/**
	 * @param ComponentItemList $usedAddonList
	 */
	public function setUsedAddonList( $usedAddonList )
	{
		$this->usedAddonList = $usedAddonList;
	}

	/**
	 * @return ComponentItemList
	 */
	public function getAddonList()
	{
		return $this->AddonList;
	}

	/**
	 * @param ComponentItemList $AddonList
	 */
	public function setAddonList( $AddonList )
	{
		$this->AddonList = $AddonList;
	}

	/**
	 * @return AllergenAdditiveItemList
	 */
	public function getUsedAdditiveList()
	{
		return $this->usedAdditiveList;
	}

	/**
	 * @param AllergenAdditiveItemList $usedAdditiveList
	 */
	public function setUsedAdditiveList( $usedAdditiveList )
	{
		$this->usedAdditiveList = $usedAdditiveList;
	}

	/**
	 * @return AllergenAdditiveItemList
	 */
	public function getUsedAllergenList()
	{
		return $this->usedAllergenList;
	}

	/**
	 * @param AllergenAdditiveItemList $usedAllergenList
	 */
	public function setUsedAllergenList( $usedAllergenList )
	{
		$this->usedAllergenList = $usedAllergenList;
	}
}