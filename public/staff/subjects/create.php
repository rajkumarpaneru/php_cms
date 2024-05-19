<?php 
require_once('../../../private/initialize.php');
    if(is_post_request()){
        $menu_name = $_POST['menu_name'] ?? "";
        $position = $_POST['position'] ?? "";
        $visible = $_POST['visible'] ?? "";
    
        echo $menu_name;
    } else {
        redirect_to(url_for('/staff/subjects/new.php'));
    }
   
?>