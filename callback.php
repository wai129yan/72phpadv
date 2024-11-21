<?php

// pyan may yan


function callbackFunction($buffer) {
   $buffer();
}
function hello() {
    echo "Hello World";
}

callbackFunction('hello');

echo "<hr>";

function greet($callback) {
    echo "start greeting";
    echo "<br>";
    $callback();
    echo "<br>";
    echo "end greeting";
}
function sayHi()
{
    echo "Hi,there";
}

greet('sayHi');

echo "<hr>";
echo "<hr>";


class Index 
{
    public function doIt($finish)
    {
        $i = 0;
        $sum = 0;
        while ($i < 10000) {
            $sum += $i;
            $i++;
        }
        // return $sum;
        $this->finish($sum);
    }

    public function finish($total)
    {
       
      echo "Total is :" . $total;
    }

}

$index = new Index();

$result = $index->doIt('finish');
echo " Result of doIT :" . $result. "<br>";

// $result2 = $index->doIt2('0');
// echo "Result of doIT2 :" . $result2. "<br>";

echo "<hr>";

class Index2
{
    public function doIt($finish)
    {
        // $i = 0;
        // $sum = 0;
        // while ($i < 10000) {
        //     $sum += $i;
        //     $i++;

        $this->finish(1000);
        }
        // return $sum;
    //     $this->finish($sum);
    // }

    public function finish($total)
    {
        echo "Total is :" . $total;
    }
}

$ind = new Index2();
$ind->doIt('finish');
echo "<hr>";
echo "<hr>";



class TaskManager 
{
    public function execute($taskName,$param)
    {
        if(method_exists ($this,$taskName)){
            $this -> $taskName($param);
        } else {
            echo "Task 'TaskName' not found.";
        }
    }

    public function greet($name)
    {
        echo "Hello, $name! Welcome to out system.";
    }
    public function calculateSquare($number)
    {
        echo "The square of $number is " . ($number * $number);
    }

    public function showDateTime($unused)
    {
        echo "Current date and time: " . date('Y-m-d H:i:s');
    }
}

$taskManager = new TaskManager();
$taskManager->execute('greet', 'John');
echo "<br>";
$taskManager->execute('calculateSquare', 5);
echo "<br>";
$taskManager->execute('showDateTime', 'unused');
echo "<br>";



