<?php
    function find_all_subjects(){
        global $db;
        $sql = "SELECT * FROM subjects ";
        $sql .= "ORDER BY position ASC;";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        return $result;
    }

    function find_all_pages(){
        global $db;
        $sql = "SELECT * FROM pages ";
        $sql .= "ORDER BY subject_id ASC, position ASC;";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        return $result;
    }

    function find_subject_by_id($id){
        global $db;
        $sql = "SELECT * FROM subjects ";
        $sql .= "WHERE id='". $id . "';";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        mysqli_free_result($result);
        return $result;
    }

    function insert_subject($menu_name, $position, $visible){
            $menu_name = $_POST['menu_name'] ?? "";
            $position = $_POST['position'] ?? "";
            $visible = $_POST['visible'] ?? "";
        
            $sql = "INSERT INTO subjects ";
            $sql .= "(menu_name, position, visible) ";
            $sql .= "VALUES (";
            $sql .= "'". $menu_name . "',";
            $sql .= "'". $position . "',";
            $sql .= "'". $visible . "'";
            $sql .= ")";
            $result = mysqli_query($db, $sql);
            if($result) {
                return true;
            } else {
                echo mysqli_error($db);
                db_disconnect($db);
                exit;
            }
    }
?>