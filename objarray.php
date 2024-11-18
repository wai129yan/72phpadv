<?php

class Test {

}

class Test2 {

}

class Index 
{
    public function showResult(Test2 $num)
    {
        var_dump($num);
        
    }
}


$ind = new Index();
echo "<pre>";
// $ind->showResult(["helo", "world"]);
echo "<br>";
$t = new Test();


$tt = new Test2();
$ind->showResult($tt);

//it must be same instance name which is defined in class