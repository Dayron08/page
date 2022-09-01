<?php
require_once("../Models/resources.php");

$insert = new Resources();

if(isset($_FILES['file']["name"])){
    // $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt');
    // $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    // if
    $image_name = $_FILES['file']["name"];
    $folder = '../Models';
    $temporary = $_FILES['file']["tmp_name"];
    move_uploaded_file($temporary,  $folder.'/'.$image_name);
    var_dump($_FILES);
}else{
    echo "Error al esperar la imagen";
}