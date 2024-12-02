<?php
require_once "app/Middleware/filter.php";
require_once "app/Home.php";
require_once "app/Best.php";

use app\Middleware\Filter as Filter;
use app\Best as Best;
use app\Home as Home;

 class Index
 {
    public function __construct()
    {
        $home = new Home();
        $home->sayHomeName();
        echo "<hr>";
        $best = new Best();
        $best->sayBestName();
        echo "<hr>";
        $fil = new Filter();
        $fil ->sayFilterName();
    }
 }


new Index();



?>