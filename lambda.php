<?php

$ss  = function($a,$b){
  
    return $a + $b;
};

echo $ss(1,2);
echo "<hr>";

$toUpper = function($str){
    return strtoupper($str);
};

echo $toUpper("hello");
echo "<hr>";

$array = [1,2,3,4,5];
$squared = array_map(function($n){
    return $n * $n;
},$array);
print_r($squared);
echo "<hr>";

$num = 10;
$num2 = 10;
$add = function ($n) use ($num, $num2){
    return $n + ($num*$num2);
};
echo $add(10);

$bb = 55;
$cook = function($a) use ($bb){
    return $a + $bb;
};
echo "<hr>";
echo $cook(10);

echo "<hr>";

// $num = 10;
$createMulti = function($factor)
{
    return function($num) use ($factor){
        return $num * $factor;
    };
};
$double = $createMulti(2);
// $triple = $createMulti(3);
echo $double(50);

echo "<hr>";


$arr = [10,26,4,88,86];

$even = array_filter($arr, function($n){
    return $n % 2 == 0;
});
print_r($even);

echo "<hr>";


$data = [
    "name" => "John",
    "age" => 25,
    "city" => "Yangon",
    "status" => "active"
];

// Filter only keys with string values
$filtered = array_filter($data, function($value) {
    return is_int($value);
});
print_r($filtered);

echo "<hr>";

$numbers = [3, 2, 5, 1, 4];

// Sorting using usort
usort($numbers, function($a, $b) {
    return $a - $b; // Ascending order
});

print_r($numbers);


