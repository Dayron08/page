<?php
require_once("../Models/singUp.php");

$get_image_profile = new SingUp();
  
$result = $get_image_profile->get_image_profile();

 
$json_string = json_encode($result);

echo $json_string;

$file = "../Views/js/json/image_profile.json";

file_put_contents($file, $json_string);