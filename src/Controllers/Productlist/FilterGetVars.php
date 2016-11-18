<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 07.11.2016
 * Time: 11:57
 */

namespace Class152\PizzaMamamia\Controllers\Productlist;


use Class152\PizzaMamamia\AbstractClasses\AbstractValidator;

class FilterGetVars extends AbstractValidator
{
    /** @var string */
    protected $sortby;

    /** @var int */
    protected $currentPage;

    public function __construct(array $getVars )
    {
        parent::__construct($_GET, ['sortby','currentPage'] );

    }

    /**
     * @return string
     */
    public function getSortBy() : string
    {
        return $this->sortby;
    }

    /**
     * @return int
     */
    public function getCurrentPage() : int
    {
        return (INT)$this->currentPage;
    }


}