<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 

include_once "Car.php";
include_once "Motor.php";
include_once "RoutingInterface.php";
class Test
{
    private $routingInterface;
    public function __construct(RoutingInterface $routingInterface)
    {
        $this->routingInterface = $routingInterface;    
    }

    public function search()
    {
        $this->routingInterface->search();
    }
}

$car = new Car();
$motor = new Motor();

$test = new Test($car);
$test->search();

$test1 = new Test($motor);
$test1->search();
?>