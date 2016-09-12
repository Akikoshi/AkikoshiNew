<?php
/**
 * Created by PhpStorm.
 * User: HeiseT
 * Date: 07.09.2016
 * Time: 15:19
 */

namespace Class152\PizzaMamamia\Library;


class ControllerMenu
{
    private $menuEntries =[];

    public function __construct()
    {
        $path = __DIR__ . "/../Controllers/";

        $dir = dir($path);

        while ( $entry = $dir->read() ) {
            if ('.' == substr($entry,0,1)) {
                continue;
            }
        }
    }
}