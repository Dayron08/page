<?php

require_once("../Models/singUp.php");

$insert = new SingUp();

if(isset($_REQUEST['btn_singUp'])){
    $insert -> set_user_id($_REQUEST["forma_pago"]);
    $insert -> set_name($_REQUEST["forma_pago"]);
    $insert -> set_surname($_REQUEST["forma_pago"]);
    $insert -> set_password($_REQUEST["forma_pago"]);
    if($insert->create()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
}else{
    echo ("Error al esperar los datos");
}