<?php 
    $filepath = __DIR__ . '/../../uploads/1709629956268.jpeg';

    if(file_exists($filepath)){
        chmod($filepath, 0766);
    }



?>