<?php

$name = null;
$defaultName = "John Doe";

$userName = $name ?? $defaultName;
echo $userName;

echo "<hr>";

$age = 25;
$defaultAge = 18;
$userAge = $age ?? $defaultAge;
echo $userAge;
echo "<hr>";


$address = null;
$city = "Yangon";

$location = $address ?? $city;
echo $location;
echo "<hr>";