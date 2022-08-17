<?php

session_start();

if(!isset($_GET['access'])){
    require_once("Controllers/contents/home_user.php");
}else{
    require_once("Controllers/util.php");
    $util = new Util();
    $module = $util ->module($_GET["access"]);
    require_once("Controllers/contents/".$module.".php");
}