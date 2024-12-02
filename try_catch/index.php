<?php

try {
    $num = 100;
    if ($num > 10){
        throw new Exception("Number is greater than 100");
    }
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage();

}

echo "<hr>";
echo "<hr>";

try {
    fopen('test.txt', 'r');
}catch(Exception $e) {
    echo $e->getMessage();
}
echo "Hey, I'm still here!";

echo "<hr>";
echo "<hr>";


try {
    $file = fopen('test.txt','r');
    if($file) {
        echo "Aung Tl";
        fclose($file);
    }else {
        die ('we got an issue opening the file');
    }
} catch (Exception $e) {
    echo "file can't be reached " . $e -> getMessage();
}

echo "<hr>";



try{
    if(fopen('test.txt','r')) {
        echo "Good";
    } else {
        throw new Exception("File can't be read");
    }
}catch(Exception $e){
    echo $e-> getMessage();
}finally{
    echo "<br>Har Now";
}


echo "<hr>";
echo "<hr>";





try {
    $num1 = 10 ;
    $num2 = 0;

    if($num2 == 0) {
        throw new Exception("Cannot divide by zero");
    } else {
        $result = $num1/ $num2;
        echo "The result is : $result";
    }
} catch (Exception $e) {
    echo $e -> getMessage();
}finally {
    echo "<br>Execution completed.";
}
echo "<hr>";
echo "<hr>";


function MyCustomErrorHandler(){
    throw new Exception("File Not Found Sir");
}
set_error_handler("MyCustomErrorHandler");

try{
   fopen('test.txt','r');
   
}catch(Exception $e){
    echo $e-> getMessage();
}finally{
    echo "<br>Har Now";
}

