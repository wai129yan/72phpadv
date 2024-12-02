<?php 

class Loader

{
    public static function load($classname)
    {
        require_once $classname . ".php";
    }
}














?>