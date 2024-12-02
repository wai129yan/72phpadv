<?php
namespace app\Middleware;

class Filter
{
    public function sayFilterName()
    {
        echo "My name is Filter ";
        $dtime = new \DateTime();
    }
}

?>