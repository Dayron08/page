<?php
require_once("../Models/singUp.php");

$selectimage = new SingUp();
 
$result = $selectimage->readimages();


$images[]= array(
"id"=> $result["ID_IMAGEN"],
"image" => $result["IMG_PATH"]);

// $images = array();
// while ($result = mysqli_fetch_assoc($this->result)) {
//     $images[]= array(
//         "id"=> $result["ID_IMAGEN"],
//         "image" => $result["IMG_PATH"]);
//     }


$json_string = json_encode($images);

echo $json_string;

$file = "../Views/js/json/images.json";

file_put_contents($file, $json_string);

