<?php
    include_once('connect.php');
    include_once('users.php');
    
    $object = new User;
    echo $object->getAllUsers('1');
        

    $fileUpload = new File();

    if (isset($_FILES['file'])){
        $fileUpload->uploadFile($_FILES['file']);
    }

    else{
        die('File was not submitted!');
    }
 ?>