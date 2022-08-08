<?php
require_once("../Models/singUp.php");

$select = new SingUp();

if(isset($_REQUEST['txt_email'])){
    $select -> set_gmail($_REQUEST["txt_email"]);
    $select -> set_password($_REQUEST["txt_pass"]);

    var_dump($select);

    if($select->read()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
    
}else{
    echo ("Error al esperar los datos");
}