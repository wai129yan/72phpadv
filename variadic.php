<?php 


function sum(int ...$nums) : int {
    return array_sum($nums);
}

echo sum(1,2,3,4);

echo "<hr>";

function registerUser($name, $email, $age = null){
    echo "User $name registered with $email and age $age";
}

registerUser("Mg Mg", "mgmg@gmail.com", 20);
echo "<hr>";
registerUser("Mg Mg", "mgmg@gmail.com");
echo "<hr>";

function displayItems (int|string ...$items) : void {
    foreach ($items as $item) {
        echo $item . "<br>";
    }
}

displayItems(1,'apple',3,'banana',3.6,true);

echo "<hr>";

function printNumbers(int ...$numbers) {
    foreach ($numbers as $number){
        echo $number . "<br>";
    }
}

printNumbers(1,2,3,4,5,6,7,8,9,10);
echo "<hr>";

function vari (int|float ...$numbers) {
    return array_sum($numbers);
}
echo vari(1,2,3,4,5,6,7,8,9,10);