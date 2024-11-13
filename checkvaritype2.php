<!-- 
limit Type 
(int num),array,string, 

-->

<?php

class Index 
{
    public function showResult (int $num)
    {
        var_dump($num);
    }
}


class Trail
{
    public function finalResult (array $num)
    {
        var_dump ($num);
    }
}

class Train
{
    public function mainResult(int $num) :string
    {
        var_dump(TRUE);
        echo "<hr>";
        return NUll;
    }
}



// $ind = new Index();
// $ind->showResult(99);

// echo "<br>";

// $tt = new Trail();
// $tt->finalResult(["One"=>1,"Two"=>2]);

echo "<br>";

$woo = new Train();
$inn =  $woo->mainResult(10);
var_dump($inn);