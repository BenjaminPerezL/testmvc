<?php 

class registrarModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos){
        //inserta datos en db
        //$this->db->connect
       //echo 'insertar datos';

        try{
            $query = $this->db->connect()->prepare('INSERT INTO users (username, password) VALUES(:username,:password)');
            $query->execute(['username' => $datos['username'],'password' => $datos['password']]);
            return true;
        }catch(PDOException $e){
            
            //echo 'ya existe el usuario';
            return false;
        }
        
    }
}

?>