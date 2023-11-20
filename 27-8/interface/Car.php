<?php
include_once "RoutingInterface.php";
class Car implements RoutingInterface
{
    public function search()
    {
        echo "Car class <br>";
    }
}