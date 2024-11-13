<?php


class One
{
    public static $name = "abc";

    public static function authorName(){
       return self::$name;
    }
    
    public static function getAuthorName(){
        //  echo self::authorName();
        echo static::authorName();
    }
}


class Two extends One
{
    public static function authorName(){
        return self::$name . " and shine";
    }
}

// $one = new One();
// echo $one->authorName();

// One::getAuthorName();
// One::authorName();
// echo "<br>";
Two::getAuthorName();

