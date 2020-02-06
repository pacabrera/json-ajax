<?php 

class User extends Dbh {

    public function getAllUsers($id){
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE id=?");
        $stmt->execute([$id]);
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $return_arr = $stmt->fetch();
    
        return json_encode($return_arr);
    }

}

class File{
    private $_supportedFormats = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];

    public function uploadFile(){
        if (is_array($file)){

            if(in_array($file[type],$this->_supportedFormats)){
                move_uploaded_file($file['tmp_name'],'uploads/'.$file['name']);
                echo 'Uploaded';
            }
            else{
                die('NO foile');
            }
        }
        die('No file Uplaoded');
    }

}

?>