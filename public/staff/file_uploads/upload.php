<?php 
    function upload_error($error){
        $upload_errors = [
            UPLOAD_ERR_OK => "No errors.",
            UPLOAD_ERR_INT_SIZE => "upload_max_filesize exceeded.",
            UPLOAD_ERR_FORM_SIZE => "max_file_size exceeded.",
            UPLOAD_ERR_PARTIAL => "Partial upload.",
            UPLOAD_ERR_NO_FILE => "No file.",
            UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
            UPLOAD_ERR_CANT_WRITE => "Can't write to the disk.",
            UPLOAD_ERR_EXTENSION => "File upload stopped by extension.",
        ];

        return $upload_errors[$error];
    }
    $upload_dir = __DIR__ . '/../../uploads';
    if(isset($_POST['submit'])){
        $error = $_FILES['file_upload']['error'];
        if($error > 0){
            echo upload_error($error);
        } else {
            $tmp_path = $_FILES['file_upload']['tmp_name'];
            $filename = basename($_FILES['file_upload']['name']);
            $target_path = $upload_dir . '/' . $filename;
    
            if(move_uploaded_file($tmp_path, $target_path)) {
                echo "File uploaded successfully.";
            }else{
                echo "File upload failed.";
            }
        }
        
    }
?>