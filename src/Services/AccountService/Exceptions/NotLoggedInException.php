<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 16.09.2016
 * Time: 10:37
 */

namespace Class152\PizzaMamamia\Services\AccountService\Exceptions;


class NotLoggedInException extends AccountServiceException
{

    public function __construct( )
    {
        echo 'NotLoggedInException';
    }
}