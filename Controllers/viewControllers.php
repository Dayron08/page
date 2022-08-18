<?php


require_once "../Models/views_models.php";
class viewControllers extends viewsModels{
    public function get_controllers_views(){
        if(!isset($_GET['access'])){
            $result ="home_user";
        }else{
            $route =($_GET['access']);
            $result = viewsModels::get_models_views($route);
            // require_once("Controllers/contents/".$module.".php");
        }
        return $result;
    }

}


?>