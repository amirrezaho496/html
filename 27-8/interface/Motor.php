<?php
include_once "RoutingInterface.php";
class Motor implements RoutingInterface
{
    public function search()
    {
        echo "Motor class <br>";
    }
}