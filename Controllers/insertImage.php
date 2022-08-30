<?php

// if(isset($_REQUEST['btn_name'])){
//     $nombre_imagen = $_FILES['name_input']['name'];
//     $temporal = $_FILES['name_input']['tmp_name'];
//     $carpeta='../Views/img';
//     $ruta = $carpeta.'/'.$nombre_imagen;
//     move_uploaded_file($temporal, $carpeta.'/'.$nombre_imagen);

//     $query = "INSERT INTO imagen (ruta) VALUES ('$ruta')";

// }


require_once("../Models/singUp.php");

$insert = new SingUp();
   
if(isset($_REQUEST['txt_img'])){
   

    $insert -> set_image($_REQUEST["txt_img"]);
    $insert -> set_category($_REQUEST["sel_category"]);

    if($insert->insertImage()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
     
}else{
    echo ("Error al esperar los datos");
}