<?php

class Errores extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = 'Error al cargar recurso';
        $this->view->render('errores/index');
        //echo "<p>Error al cargar recurso</p>";
        $mensaje_err='';
    }
}

?>