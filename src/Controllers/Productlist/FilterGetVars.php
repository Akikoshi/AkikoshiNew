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

    public function __construct(array $getVars )
    {
        parent::__construct($_GET, ['sortby'] );

    }

    /**
     * @return string
     */
    public function getSortBy() : string
    {
        return $this->sortby;
    }

}