<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 14.09.2016
 * Time: 14:13
 */

namespace Class152\PizzaMamamia\Interfaces;


interface PriceInterface
{

    /**
     * PriceInterface constructor.
     * @param float $grossPrice
     * @param int $vat
     */
    public function __construct( float $grossPrice, int $vat );

    /**
     * @return float
     */
    public function getGrossPriceValue() : float;

    /**
     * @return float
     */
    public function getNetPriceValue() : float;

    /**
     * @return float
     */
    public function getVatPriceValue() : float;

    /**
     * @return int
     */
    public function getVatValue() : int;

    /**
     * @return string
     */
    public function getGrossPriceAsHtml() : string;

    /**
     * @return string
     */
    public function getNetPriceAsHtml() : string;

    /**
     * @return string
     */
    public function getVatPriceAsHtml() : string;

    /**
     * @return string
     */
    public function getVatAsHtml() : string;

    // TODO: possibility to reduce a price by marketing campaigns

//    public function reduceInPercent() : float;

//    public function reduceToPrice( float $targetPrice );

//    public function removeReduction();

}