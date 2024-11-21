<?php 

$users = [
    ['name' =>  'john' , 'email' => 'john@gmail.com'],
    ['name' =>  'mary' , 'email' => 'mary@gmail.com'],
    ['name' =>  'jane' , 'email' => 'jane@gmail.com'],
];

array_walk($users, function(&$user){
   $user['name'] . " " . $user['email'] . "<br>";
});

echo "<pre>";
print_r($users);