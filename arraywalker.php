<?php

$arr = [
    "name" => "John",
    "age" => 25,
    "city" => "Yangon",
    "status" => "active"
];

function fonky($value,$key){
    echo " key is " . $key . " value is " . $value."<hr>";
}
// echo "hr?";
array_walk($arr,"fonky");



// ($arr, function($value, $key){
//     echo $key . " => " . $value . "<br>";
// });

$words = ["apple", "banana", "cherry", "date", "elderberry"];

array_walk($words,function($value,$key){
    echo "Element at index $key is has length of: " . strlen($value) . "<br>";
});

echo "<hr>";