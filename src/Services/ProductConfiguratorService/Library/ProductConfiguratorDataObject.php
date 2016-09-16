<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 14.09.2016
 * Time: 15:41
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Library;


use Class152\PizzaMamamia\Services\ProductConfiguratorService\Exceptions\ProductConfiguratorDataObjectNeedsProductItemException;

class ProductConfiguratorDataObject
{
	/* ToDo: complete this DATA-Class */
	/* Data-Class to hold all Information for the Product-Configurator */

	/**
	 * @var ProductItem
	 * Hold the product-details.
	 */
	private $productDetails;

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

	/* # SETters #################################################################################################### */

	/**
	 * @param ProductItem $productItem
	 * @throws ProductConfiguratorDataObjectNeedsProductItemException
	 */
	public function setProductDetail( ProductItem $productItem )
	{
		if ( !is_object( $productItem )
			|| !is_a( $productItem, 'ProductItem' )
		) {
			throw new ProductConfiguratorDataObjectNeedsProductItemException(
				'This Data-Object can only store ProductItem for ProductDetail.'
			);
		}
		else {
			$this->productDetails = $productItem;
		}
	}

	/* # GETters #################################################################################################### */

	/**
	 * @return ProductItem
	 */
	public function getProductDetails()
	{
		return $this->productDetails;
	}

	/**
	 * @return ComponentItemList
	 */
	public function getUsedIngredientList()
	{
		return $this->usedIngredientList;
	}

	/**
	 * @return ComponentItemList
	 */
	public function getUsedAddonList()
	{
		return $this->usedAddonList;
	}

	/**
	 * @return ComponentItemList
	 */
	public function getAddonList()
	{
		return $this->AddonList;
	}

	/**
	 * @return AllergenAdditiveItemList
	 */
	public function getUsedAdditiveList()
	{
		return $this->usedAdditiveList;
	}

	/**
	 * @return AllergenAdditiveItemList
	 */
	public function getUsedAllergenList()
	{
		return $this->usedAllergenList;
	}
}