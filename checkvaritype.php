<!-- 
check for integer - is_int
check for string - is_string 
check for float  - is_float



-->

<?php 

class Index 
{
    public function showResult($num)
    {
        if(is_int($num)) {
            echo "You passing argument is Interger";
        } else {
            die ("We need Integer Data Type");
        }
    }
}

$ind = new Index();
$ind->showResult(44);