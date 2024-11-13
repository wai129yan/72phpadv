<?php

class Indexy{
    private static $name = "abc";
    private static $instance;

    private function __construct(){
        self::$name = "def";
    }

    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new Indexy();
        }
        return  self::$instance;
    }

    public function getName(){
        return self::$name;
    }

}

$ind =  Indexy::getInstance();
echo $ind->getName();



// check instane is or not check
// not => create , yes => return
// it is singleton class