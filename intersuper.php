<?php

interface tInter{
    public function mustOver();
}

class DD 
{
    public function nameDD()
    {
        echo "My name is DDM<hr>";
    }
}

class Mysuper extends DD implements tInter
{
    public function mustOver()
    {
        echo "Double implements";
    }
}

class Coder extends Mysuper
{
    
}

$ss = new Coder();
$ss->nameDD();
$ss->mustOver();
