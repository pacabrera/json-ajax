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

?>