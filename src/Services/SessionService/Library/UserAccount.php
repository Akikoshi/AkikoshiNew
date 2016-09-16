<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 16.09.2016
 * Time: 10:23
 */

namespace Class152\PizzaMamamia\Services\SessionService\Library;


class UserAccount
{
    private $loggedIn;
    
    private $userName;

    private $userId;

    private $email;

    public function __construct()
    {
       if( ! isset( $_SESSION['user'] ) )
        {

            $_SESSION['user'] = [
                'userName'=> "testuser",
                'isLoggedIn' => false,
                'userId'=>"testid",
                'email'=>"testemail",
            ];
        }
        
    }
    public function setUserName( string $userName )
    {
        $_SESSION['user']['userName'] = $userName;
    }

    public function getUserName() : string
    {
        return $_SESSION['user']['userName'];
    }


    public function setUserId( string $userId )
    {
        $_SESSION['user']['id'] = $userId;
    }

    public function getUserId() : string
    {
        return $_SESSION['user']['userId'];
    }


    public function setEmail( string $email )
    {
        $_SESSION['user']['email'] = $email;
    }

    public function getEmail() : string
    {
        return $_SESSION['user']['email'];
    }

    
    public function isLoggedIn() : bool
    {
        return $_SESSION['user']['isLoggedIn'];
    }
    
}