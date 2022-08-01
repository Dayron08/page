<?php

require_once "../Models/people.php";
$read = new People();
if($result = $read ->read()){
    var_dump($result);



}else{
    echo "error";
}