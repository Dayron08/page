<?php
require_once("../Models/singUp.php");

$call_profile = new SingUp();
  
$result = $call_profile->read();

 
$json_string = json_encode($result);

echo $json_string;

$file = "../Views/js/json/consul.json";

file_put_contents($file, $json_string);