<!-- no changes on run times before program run-> compile -->
<!-- dynamically changes on run time after program run -> transpile  -->

<?php 

class One {
    public function className(){
        return __CLASS__;
    }

    public function getClassName(){
        // echo $this->className(); //current class - static 
        // echo self::className();   //early binding original class
        // echo static::className(); //late binding
    }
}

class Two extends One {
    public function className(){
        return __CLASS__;
    }
}

$one = new One();
$one->getClassName();

echo "<br>";

$two = new Two();
$two->getClassName();