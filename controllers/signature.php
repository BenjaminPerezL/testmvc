<?php

class Signature extends Controller{
    function __construct()
    {
        parent::__construct();
        
        //echo "<p>Nuevo Controllador main</p>";
    }

    function render(){
        $this->view->render('signature/index');
    }

    function registroFirma(){
        echo 'firma registrada'; 
        $this->model->insert();
    }
}

?>