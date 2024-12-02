<?php
require_once "app/Middleware/Start.php";
require_once "app/Controller/Home.php";
require_once "app/Controller/Sub/Helper.php";
require_once "app/Controller/Filter/Filter.php";


class Index
{

    public function __construct()
    {
        $start = new Start();
        $start->sayStartName();
        echo "<hr>";
        $home = new Home();
        $home->sayHomeName();
        echo "<hr>";
        $fil = new Filter();
        $fil->sayFilterName();

        $help = new Helper();
        $help->sayHelperName();
        echo "<hr>";
    }
}

new Index();
