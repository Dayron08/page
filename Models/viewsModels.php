<?php
class viewsModels{
    protected static function get_models_views($views){
        $white_List=["home_user","about-us_user","testimonials_user","videos_user","images_user", "lives_user", "events_user", "contact-us_user", "my-profile_user","home_admin","about-us_admin","testimonials_admin","videos_admin","images_admin", "lives_admin", "events_admin", "contact-us_admin", "my-profile_admin"];
        $get_list=["U-101","U-102","U-103","U-104","U-105","U-106","U-107","U-108","U-109","A-201","A-202","A-203","A-204","A-205","A-206","A-207","A-208","A-209",];
        if(in_array($views, $get_list)){
            switch ($views) {
                //user
                case 'U-101':
                    $module_access = $white_List[0];
                    break;
                case 'U-102':
                    $module_access = $white_List[1];
                    break;
                case 'U-103':
                    $module_access = $white_List[2];
                    break;
                case 'U-104':
                    $module_access = $white_List[3];
                    break;
                case 'U-105':
                    $module_access = $white_List[4];
                    break;
                case 'U-106':
                    $module_access = $white_List[5];
                    break;
                case 'U-107':
                    $module_access = $white_List[6];
                    break;
                case 'U-108':
                    $module_access = $white_List[7];
                    break;
                case 'U-109':
                    $module_access = $white_List[8];
                    break;
                    //admin
                case "A-201":
                    $module_access = $white_List[9];
                    break;
                case "A-202":
                    $module_access = $white_List[10];
                    break;
                case "A-203":
                    $module_access = $white_List[11];
                    break;
                case "A-204":
                    $module_access = $white_List[12];
                    break;
                case "A-205":
                    $module_access = $white_List[13];
                    break;
                case "A-206":
                    $module_access = $white_List[14];
                    break;
                case "A-207":
                    $module_access = $white_List[15];
                    break;
                case "A-208":
                    $module_access = $white_List[16];
                    break;
                case "A-209":
                    $module_access = $white_List[17];
                    break;
                
            }
        }else{
            $module_access ="404";
        }
        return $module_access;
    }
}


?>