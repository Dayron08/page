<?php
require_once("../Models/singUp.php");
echo "estou awui";
$selectimage = new SingUp();
 
$result = $selectimage->readimages();

$json_string = json_encode($result);

echo $json_string;

$file = "../Views/js/json/images.json";

file_put_contents($file, $json_string);