<?php
class Driver
{
    public $name,$age,$family,$hourlyRate,$martialStatus;

    public function setName (string $name)
    {
        $this->name = $name;
    }
    public function getName() : string
    {
        return $this->name;
    }

    public function setAge (int $age) 
    {
        $this->age = $age;
    }

    public function getAge() : int
    {
        return $this->age;
    }

    public function setfamily(array $family) 
    {
        $this->family = $family;
    }

    public function getfamily() :array
    {
        return  $this->family;
    }

    public function setHourlyRate(float $hourlyRate) 
    {
        $this->hourlyRate = $hourlyRate;
    }
    public function getHourlyRate() : float
    {
        return $this->hourlyRate;
    }
    public function setMartialStatus(bool $martialStatus) 
    {
        $this->martialStatus = $martialStatus;
    }
    public function getMartialStatus() : bool
    {
        return $this->martialStatus;
    }
}

class Car  
{
    public $brand,$modal,$prices,$spares,$available;

    public function __construct(string $brand, int $modal, float $prices, array $spares,bool $available)
    {
        $this->brand = $brand;
        $this->modal = $modal;
        $this->prices = $prices;
        $this->spares = $spares;    
        $this->available = $available;
    }
    public function getBrand() : string
    {
        return $this->brand;
    }
    public function getModal() : int
    {
        return $this->modal;
    }
    public function getPrices() : float
    {
        return $this->prices;
    }
    public function getSpares() : array
    {
        return $this->spares;
    }
    public function getAvailable() : bool
    {
        return $this->available;
    }


}

class Rent 
{
    public $driver,$car;
    public function __construct(Driver $driver, Car $car)
    {
        $this->driver = $driver;
        $this->car = $car;
    }
    public function getDriver() : Driver
    {
        return $this->driver;
    }
    public function getCar() : Car
    {
        return $this->car;
    }
}

$dmg = new Driver();
$dmg->setName("Dhaka");
$dmg->setAge(23);
$dmg->setfamily(["Mia","Mia1","Mia2"]);
$dmg->setHourlyRate(1000);
$dmg->setMartialStatus(true);

$toyota = new Car("Toyota",2019,1000000,["Tyre","Engine","Break"],true);
echo "<pre>";
var_dump($dmg);
echo "<br>";
var_dump($toyota);

$rr = new Rent($dmg,$toyota);
// var_dump($rr);

echo "<br>";
echo "<hr>";

$bb = new Rent($dmg,$toyota);
// var_dump($bb);

$list = [
    $rr,
    $bb
];

echo "<pre>";
echo "There are " . count($list) . " cars available";
$serialData = serialize($list);
echo "<br>";
echo "<pre>";
echo $serialData;
echo "<br><br>";
echo "<hr>";
$aee = unserialize($serialData);
echo "<pre>". print_r($aee,true) ."</pre>";
echo "<br>";
// echo "<pre>";
// var_dump($aee);