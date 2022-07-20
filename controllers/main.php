<?php

class Main extends Controller{
    function __construct()
    {
        parent::__construct();
        
        //echo "<p>Nuevo Controllador main</p>";
    }

    function render(){
        $this->view->render('login/index');
    }


    function registrar(){
        $this->view->render('registrar/index');
    }
}

?>