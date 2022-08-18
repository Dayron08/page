<?php

class Util{
    public function module($module){
        
        switch ($module) {
            //user
            case 101:
                $module_access = 'home_user';
                break;
            case 102:
                $module_access = 'about-us_user';
                break;
            case 103:
                $module_access = 'testimonials_user';
                break;
            case 104:
                $module_access = 'videos_user';
                break;
            case 105:
                $module_access = 'images_user';
                break;
            case 106:
                $module_access = 'lives_user';
                break;
            case 107:
                $module_access = 'events_user';
                break;
            case 108:
                $module_access = 'contact-us_user';
                break;
            case 109:
                $module_access = 'my-profile_user';
                break;
                //admin
            case 201:
                $module_access = 'home_admin';
                break;
            case 202:
                $module_access = 'about-us_admin';
                break;
            case 203:
                $module_access = 'testimonials_admin';
                break;
            case 204:
                $module_access = 'videos_admin';
                break;
            case 205:
                $module_access = 'images_admin';
                break;
            case 206:
                $module_access = 'lives_admin';
                break;
            case 207:
                $module_access = 'events_admin';
                break;
            case 208:
                $module_access = 'contact-us_admin';
                break;
            case 209:
                $module_access = 'my-profile_admin';
                break;
            
        }

        return $module_access;
    }
}