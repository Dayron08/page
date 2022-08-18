<?php
require_once("../Models/singUp.php");

$insert = new SingUp();
   
if(isset($_REQUEST['txt_names'])){
   
    $insert -> set_name($_REQUEST["txt_person"]);
    $insert -> set_testimony($_REQUEST["txt_testimony"]);
   

    if($insert->insertTestimonials()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
     
}else{
    echo ("Error al esperar los datos");
}