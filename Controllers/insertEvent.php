<?php
require_once("../Models/singUp.php");

$insert = new SingUp();
   
if(isset($_REQUEST['txt_managerName'])){
  
    $insert -> set_name($_REQUEST["txt_managerName"]);
    $insert -> set_nameEvent($_REQUEST["txt_nameEvent"]);
    $insert -> set_dscEvent($_REQUEST["txt_desc"]);
    $insert -> set_dateEvent($_REQUEST["txt_date"]);
    $insert -> set_timeEvent($_REQUEST["txt_time"]);
    $insert -> set_imageEvent($_REQUEST["txt_image"]);

    if($insert->insertEvent()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
     
}else{
    echo ("Error al esperar los datos");
}