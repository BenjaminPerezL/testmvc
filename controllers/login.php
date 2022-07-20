<?php

class Login extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->usuarios = [];
        //echo "<p>Error al cargar recurso</p>";
    }

    function render(){
        $usuarios = $this->model->get();
        $this->view->usuarios= $usuarios;


    


        $this->view->render('login/index');

    }

    

    function registrar(){
        $this->view->render('registrar/index');
    }
}


?>