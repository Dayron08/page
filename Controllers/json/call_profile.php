<?php
require_once("../../Models/singUp.php");

echo"estoy aqui";
$profile = new SingUp();
if(isset($_REQUEST["P_CORREO"])){
    $profile->set_p_email($_REQUEST['P_CORREO']);
    $profile->set_p_password($_REQUEST['P_PASSWORD']);

    $result = $profile -> call_profile();
    
    $data = array(
    "FOTO_PERFIL" => $result["FOTO_PERFIL"], 
    "NOMBRE" => $result["NOMBRE"], 
    "APPELLIDOS" => $result["APPELLIDOS"],
    "FECH_NACIMIENTO" => $result["FECH_NACIMIENTO"],
    "GENERO" => $result["GENERO"], 
    "EMAIL" => $result["EMAIL"],
    "TELEFONO" => $result["TELEFONO"], 
    "PASSWORD_PERSONA" => $result["PASSWORD_PERSONA"]
    );
    $json_string = json_encode($data);
    // echo $json_string;
    $file_name = 'data_profile.json';
    file_put_contents($file_name, $json_string);
}