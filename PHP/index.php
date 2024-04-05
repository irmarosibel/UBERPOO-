<?php
require_once("car.php");
require_once("uberX.php");
require_once("uberX.php");
require_once("User.php");
require_once("account.php");

$car = new Car ("KOILA123", new Account("Gonzalo Rivera", "ASD12369","gonzalo@rivermail.com","1253698"));
$car->printDataCar();

$uberX = new UberX ("ASHA1258", new Account("Rolando Villa", "PÑLOI3256", "rolandovilla@.com","1255633"),
"Toyota","Corolla");
$uberX->printDataUberX();

$user=new UberX("Mario villa", "SDF125369","mariovillaQ.com","4523699");
$user->printDataUser();
?>