<?php
require_once("../Models/singUp.php");

$update = new SingUp();
   
if(isset($_REQUEST['txt_Id'])){
  

    $update -> set_user_id($_REQUEST["txt_Id"]);
    $update -> set_name($_REQUEST["txt_Name"]);
    $update -> set_surname($_REQUEST["txt_surname"]);
    $update -> set_date($_REQUEST["txt_date"]);
    $update -> set_gender($_REQUEST["txt_gender"]);
    $update -> set_password($_REQUEST["txt_passwordd"]);
    $update -> set_dateadmission($_REQUEST["txt_admission"]);
    $update -> set_rol($_REQUEST["txt_rol"]);
    
    if($update->UpdateMyprofile()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
     
}else{
    echo ("Error al esperar los datos");
}