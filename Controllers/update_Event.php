<?php
require_once("../Models/singUp.php");

$update = new SingUp();
   
if(isset($_REQUEST['txt_Name'])){
  
    $update -> set_name($_REQUEST["txt_Id"]);
    $update -> set_name($_REQUEST["txt_Name"]);
    $update -> set_nameEvent($_REQUEST["txt_Eventname"]);
    $update -> set_dscEvent($_REQUEST["txt_Desc"]);
    $update -> set_dateEvent($_REQUEST["txt_Eventdate"]);
    $update -> set_timeEvent($_REQUEST["txt_Eventtime"]);
    $update -> set_imageEvent($_REQUEST["txt_Eventimg"]);

    if($update->UpdateEvent()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
     
}else{
    echo ("Error al esperar los datos");
}