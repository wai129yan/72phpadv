<?php

require_once "Autoload/Loader.php";


// require_once "Helper.php";
// require_once "Hello/Hello.php";
// require_once "Hello/Lohel.php";
class Index 
{
    public function __construct()
    {
        Loader::load("Helper");
        $helper = new Helper ("Helper");
        $helper->sayYourName();

        Loader::load("Hello/Hello");
        $hello = new Hello();
        $hello->sayHello();

        Loader::load("Hello/Lohel/lohel");
        $lohel = new Lohel();
        $lohel->lohel();
    }
}

$ind = new Index();

?>