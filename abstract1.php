<?php
// abstract class never have body
// class must be abstract if class is abstract
// must be overwrite the original abstract method  in parent class

abstract class Papa
{
    const DB_HOST = "localhost";
    public $name = "MgMg";
    public function doIt()
    {
        echo "Doing It now<br>";
    }

    public abstract function myAbs();

}

class Paren extends Papa
{
    public function myAbs(){
        echo "Doing It now by abstract<br>";
    }

    public function doIt()
    {
        echo "Doing again<hr>";
    }
   
}


$ind = new Paren();
$ind->doIt();
echo "<br>";
echo  $ind->name;
echo "<br>";
echo Paren::DB_HOST;
echo "<br>";
$ind->myAbs();