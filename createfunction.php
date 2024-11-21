<?php

// function doSth($var)
// {
//     echo "Hello";
// }

// $greet = function(){
//     echo "Hello ";
// };

// $greet();

// Anonymous function



// This method is not use now 

// $var = create_function('$paral','echo "LOhei ". $para1;');
// $var("mgmg");

$var = function($paral,$para2){
    echo "lohei " . $paral .  " second para is " . $para2; 
};
$var("kio","bubu");

echo"<hr>";

$bar = function($params) {
    echo " first para is " . $params[0] . ". Second para is " . $params[1];
};

$bar(['kio', 'bubu']);

echo"<hr>";

$gar = function ($para1,$para2)
{
    echo "First array elements : ";
    foreach($para1 as $value){
        echo $value . " ";
    }
    echo "<br>";
    foreach ($para2 as $value){
        echo $value . " ";
    };
};

$gar(["kio","bubu"], ["ddd","swww"]);

echo "<hr>";

// $num = 20;
// $harhar = function($data) {
//     // global $num;
//     echo "Testing about anonymous function: " . $data . " and global variable is " . $num;
// }; // Add semicolon here to terminate the anonymous function definition

// $harhar($num);
// echo "<hr>";



$num = 30;
$sana = function($data1) {
    $data1 = 60;
    echo "This is second anonymous function: " . $data1;
};

echo $num . "<hr>"; // Output the value of $num before calling the function
$sana($num); // 
echo "<hr>";
echo $num;





?>

