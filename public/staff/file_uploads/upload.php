<?php 
    $upload_dir = __DIR__ . '/uploads';
    if(isset($_POST['submit'])){
        $tmp_path = $_FILES['file_upload']['tmp_name'];
        $filename = basename($_FILES['file_upload']['name']);
        $target_path = $upload_dir . '/' . $filename;

        if(move_uploaded_file($tmp_path, $target_path)) {
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed.";
        }
    }
?>