<?php

require_once("../Models/singUp.php");

$insert = new SingUp();
var_dump($_REQUEST);
if(isset($_REQUEST['btn_singUp'])){
    $insert -> set_user_id($_REQUEST["txt_user_id"]);
    $insert -> set_name($_REQUEST["txt_name"]);
    $insert -> set_surname($_REQUEST["txt_surname"]);
    $insert -> set_password($_REQUEST["txt_password"]);

    if($insert->create()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
}else{
    echo ("Error al esperar los datos");
}