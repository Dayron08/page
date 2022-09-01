<?php
require_once("../Models/singUp.php");

$select = new SingUp();

$select -> set_user_id($_REQUEST["id"]);
  
$result = $select->getProfile();
 
$json_string = json_encode($result);

echo $json_string;
 
$file = "../Views/js/json/Profile.json";

file_put_contents($file, $json_string);

