<?php

include 'core/Database.php';

class User extends Database{
    private $username;
    

    public function userExists($user,$pass){
        //$md5pass =password_hash($pass, PASSWORD_DEFAULT);
        //echo $md5pass;
        $query = $this->connect()->prepare('SELECT * FROM users WHERE username = :user AND password = :pass');
        $query->execute(['user'=>$user,'pass'=>$pass]);
        

        if($query->rowCount()){
            return true;

        }else{
            return false;
        }

    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM users where username=:user');
        $query->execute(['user'=>$user]);

        foreach($query as $currentUser){
            $this->username=$currentUser['username'];
            
        }
    }

    public function getUsername(){
        return $this->username;
    }   
}



?>