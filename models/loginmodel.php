<?php 

include_once 'models/usuario.php';

class loginModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function get(){
        $items = [];

        try{
            $query = $this->db->connect()->query("SELECT username,password FROM users");
            
            while($row = $query->fetch()){
                $item = new Users();
                $item->username = $row['username'];
                $item->password = $row['password'];

                array_push($items,$item);
            }

            return $items;
        }catch(PDOException $e){
            return [];
        }
       
        
    }
}

?>