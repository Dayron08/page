<?php
require_once("../Models/singUp.php");

$selecttesti = new SingUp();
 
$result = $selecttesti->readTestimonials();


$testimonials[]= array(
"dsc"=> $result["DSC_TESTIMONIO"]);


$json_string = json_encode($testimonials);

echo $json_string;

$file = "../Views/js/json/testimonials.json";

file_put_contents($file, $json_string);

