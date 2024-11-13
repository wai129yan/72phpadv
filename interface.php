<!-- interface -->
 
<!-- 
can have only abstract methods
can have only constants
can have only public methods
can implements more than one
all methods must be overwrite
class can implements more than one interface

-->

<?php 

interface MyInterface
{
    const DB_User = "localhost";
    public function getResponse();
}

interface MyInter
{
    const DB_Pass = "222";
    public function showResponse();

    
}

class Child implements MyInterface,MyInter
{
    public function getResponse()
    {
        echo "This is response";
    }

    public function showResponse()
    {
        echo "This is show response";
    }
}

$child = new Child();
$child->getResponse();
echo "<br>";
$child->showResponse();
echo "<br>";
echo MyInterface::DB_User;
echo "<br>";
echo MyInter::DB_Pass;