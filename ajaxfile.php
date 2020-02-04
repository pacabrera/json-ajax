<?php
    include_once('connect.php');
    include_once('users.php');
    
    $object = new User;
    echo $object->getAllUsers('1');
        
 ?>