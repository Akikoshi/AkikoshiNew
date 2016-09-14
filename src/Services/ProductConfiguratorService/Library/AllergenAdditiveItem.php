<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 14.09.2016
 * Time: 11:48
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Library;


class AllergenAdditiveItem
{

	/**
	 * @var string
	 * Hold the Name of the allergen or additive.
	 */
	private $name;

	/**
	 * @var integer
	 * Hold the note-number (raised numbers eg. "2" > Banana²) of the allergen or additive.
	 */
	private $noteNumber;

	/**
	 * AllergenAdditiveItem constructor.
	 * @param string $inName
	 * @param int $inNoteNumber
	 */
	public function __construct( string $inName, integer $inNoteNumber)
	{
		$this->name = $inName;
		$this->noteNumber = $inNoteNumber;
	}

	/**
	 * @return string
	 * Return the name of the of the allergen or additive.
	 */
	public function getName() : string
	{
		return $this->name;
	}

	/**
	 * @return integer
	 * Return the note-number of the allergen or additive.
	 */
	public function getNoteNumber() : integer
	{
		return $this->noteNumber;
	}

}