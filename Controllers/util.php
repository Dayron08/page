<?php

class Util{
    public function module($module){
        switch ($module) {
            case 1:
                $module_access = 'home_user.php';
                break;
            case 2:
                $module_access = 'about-us_user.php';
                break;
        }
    }
}