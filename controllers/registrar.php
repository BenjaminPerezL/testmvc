<?php

class Registrar extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
        
        
    }

    function render(){
        $this->view->render('registrar/index');
    }


    function registrarUser(){


        $username =  $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        

        $mensaje = "";

        if($password!=$confirm_password){
            $mensaje =  'Contraseñas son distintas.';
        }else{
            //$password = password_hash($password, PASSWORD_DEFAULT);
            if($this->model->insert(['username' => $username , 'password' => $password])){
                $this->view->render('main/index');
                //include_once 'views/main/index.php';
            }else{
                $mensaje =  'El usuario  ya existe.';
            }
        }

        
        

        $this->view->mensaje = $mensaje;
        $this->render();
    }
}

?>