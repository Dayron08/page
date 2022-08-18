<?php

session_start();

if(!isset($_GET['access'])){
    require_once("Controllers/contents/home_admin.php");
}else{
    require_once("Controllers/contents/contents.php");
    // $content = Views_controllers::get_controllers_views($_GET["access"]);
    require_once("Controllers/contents/".$module.".php");
}