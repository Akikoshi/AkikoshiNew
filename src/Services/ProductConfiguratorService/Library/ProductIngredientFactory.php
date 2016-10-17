<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 16.09.2016
 * Time: 10:53
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Library;


class ProductIngredientFactory
{
	/**
	 * @var int
	 * Hold the id of the product.
	 */
	private $productId;

	/**
	 * @var ComponentItemList
	 */
	private $ingredientList;

	/**
	 * @var AllergenAdditiveItemList
	 */
	private $additiveList;

	/**
	 * @var AllergenAdditiveItemList
	 */
	private $allergenList;

	/**
	 * ProductIngredientFactory constructor.
	 * @param int $productId
	 */
	public function __construct( int $productId )
	{
		$this->productId = $productId;
		$this->generateIngredientList();
	}

	private function generateIngredientList()
	{
		// FOR EACH ingredient OF product( $this->productId ) DO
		
		/* ToDo: get Data from Database by $this->productId*/
		$ingredientId = 2;        // $ingredientId = ComponentID from Database of this
		
		$myReplaceableList 	= $this->generateReplaceableList( $ingredientId );
		$myAdditiveList	 	= $this->generateAdditiveList( $ingredientId );
		$myAllergenList 	= $this->generateAllergenList( $ingredientId );

		$newEntry = new ComponentItem(
			$ingredientId,
			'Standardboden',
			'Teigware',
			'#- pathToIcon -#',
			0.00,
			$myAdditiveList,
			$myAllergenList,
			$myReplaceableList,
			true
		);
		$this->ingredientList->addItem( $newEntry );

		$ingredientId = 3;        // $ingredientId = ComponentID from Database of this 

		$myReplaceableList 	= $this->generateReplaceableList( $ingredientId );
		$myAdditiveList	 	= $this->generateAdditiveList( $ingredientId );
		$myAllergenList 	= $this->generateAllergenList( $ingredientId );

		$newEntry = new ComponentItem(
			$ingredientId,
			'Käse',
			'Belag',
			'#- pathToIcon -#',
			0.00,
			$myAdditiveList,
			$myAllergenList,
			$myReplaceableList,
			true
		);
		$this->ingredientList->addItem( $newEntry );
		
		// ENDFOR
	}

	/**
	 * @return ComponentItemList
	 */
	public function getIngredientList() : ComponentItemList
	{
		return $this->ingredientList;
	}

	/**
	 * @param int $ingredientId
	 * @return ComponentItemList
	 */
	private function generateReplaceableList( int $ingredientId ) : ComponentItemList
	{
		/* ToDo: get Data from Database by $this->productId*/
		$myReplaceableList = new ComponentItemList();

		$newEntry = new ComponentItem(
			100,
			'Boden mit Käserand',
			'Teigware',
			'#- pathToIcon -#',
			0.00,
			$this->additiveList,
			$this->allergenList
		);
		$myReplaceableList->addItem( $newEntry );


		$newEntry = new ComponentItem(
			101,
			'laktosefreier Boden',
			'Teigware',
			'#- pathToIcon -#',
			0.00,
			$this->additiveList,
			$this->allergenList
		);
		$myReplaceableList->addItem( $newEntry );
		
		return $myReplaceableList;
	}

	/**
	 * @param int $ingredientId
	 * @return AllergenAdditiveItemList
	 */
	private function generateAdditiveList( int $ingredientId ) : AllergenAdditiveItemList
	{
		/* ToDo: get Data from Database by $this->productId*/
		$myAdditiveList = new AllergenAdditiveItemList();

		$newEntry = new AllergenAdditiveItem(
			10001,
			'Zusatz Platin',
			1
		);
		$myAdditiveList->addItem( $newEntry );
		
		$newEntry = new AllergenAdditiveItem(
			10002,
			'Zusatz Blei',
			3
		);
		$myAdditiveList->addItem( $newEntry );
		return $myAdditiveList;
	}

	/**
	 * @param int $ingredientId
	 * @return AllergenAdditiveItemList
	 */
	private function generateAllergenList( int $ingredientId )  : AllergenAdditiveItemList
	{
		/* ToDo: get Data from Database by $this->productId*/
		$myAdditiveList = new AllergenAdditiveItemList();

		$newEntry = new AllergenAdditiveItem(
			20001,
			'Allergen Blau',
			2
		);
		$myAdditiveList->addItem( $newEntry );

		$newEntry = new AllergenAdditiveItem(
			20002,
			'Allergen Orange',
			4
		);
		$myAdditiveList->addItem( $newEntry );
		return $myAdditiveList;
	}
}