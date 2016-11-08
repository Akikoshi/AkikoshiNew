<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 14.09.2016
 * Time: 14:11
 */

namespace Class152\PizzaMamamia\Services\ShoppingCartService\Library;


use Class152\PizzaMamamia\Interfaces\PriceInterface;

class ShoppingCartPrice implements PriceInterface
{
    /** @var float */
    private $originalGrossPrice;

    /** @var float */
    private $grossPrice;

    /** @var int */
    private $vat;

    /** @var  float */
    private $netPriceValue;

    /** @var  float */
    private $vatPriceValue;

    /** @var string */
    private $grossPriceAsHtml;

    /** @var string */
    private $netPriceAsHtml;

    /** @var string */
    private $vatAsHtml;

    /** @var string */
    private $vatPriceAsHtml;

    /**
     * PriceInterface constructor.
     *
     * @param float $grossPrice
     * @param int $vat
     */
    public function __construct(float $grossPrice, int $vat)
    {
        $this->originalGrossPrice = $grossPrice;

        $this->calculate($grossPrice, $vat);
    }

    /**
     * @param float $grossPrice
     * @param int $vat
     */
    private function calculate(float $grossPrice, int $vat)
    {
        $this->grossPrice = round($grossPrice, 2);
        $this->vat = $vat;

        $this->netPriceValue = ($grossPrice / (1 + ($this->vat / 100)));

        $this->vatPriceValue = $this->grossPrice - $this->netPriceValue;

        $this->grossPriceAsHtml = number_format($this->grossPrice, 2, ",", ".") . " &euro;";
        $this->netPriceAsHtml = number_format($this->netPriceValue, 2, ",", ".") . " &euro;";
        $this->vatPriceAsHtml = number_format($this->vatPriceValue, 2, ",", ".") . " &euro;";
        $this->vatAsHtml = $this->vat . "%";
    }

    /**
     * @return float
     */
    public function getGrossPriceValue() : float
    {
        return $this->grossPrice;
    }

    /**
     * @return float
     */
    public function getNetPriceValue() : float
    {
        return $this->netPriceValue;
    }

    /**
     * @return float
     */
    public function getVatPriceValue() : float
    {
        return $this->vatPriceValue;
    }

    /**
     * @return int
     */
    public function getVatValue() : int
    {
        return $this->vat;
    }

    /**
     * @return string
     */
    public function getGrossPriceAsHtml() : string
    {
        return $this->grossPriceAsHtml;
    }

    /**
     * @return string
     */
    public function getNetPriceAsHtml() : string
    {
        return $this->netPriceAsHtml;
    }

    /**
     * @return string
     */
    public function getVatPriceAsHtml() : string
    {
        return $this->vatPriceAsHtml;
    }

    /**
     * @return string
     */
    public function getVatAsHtml() : string
    {
        return $this->vatAsHtml;
    }

    /**
     * @param float $percent
     */
    public function reduceInPercent(float $percent)
    {
        $this->removeReduction();
        $newPrice = $this->grossPrice * (1 - ($percent / 100));

        $this->calculate($newPrice, $this->vat);
    }

    /**
     * @return float
     */
    public function removeReduction()
    {
        $this->calculate($this->originalGrossPrice, $this->vat);
    }

    /**
     * @param float $targetPrice
     */
    public function reduceToPrice(float $targetPrice)
    {
        $this->removeReduction();
        $this->calculate($targetPrice, $this->vat);
    }
}