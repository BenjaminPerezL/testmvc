<?php

class Manual extends Controller{
    function __construct()
    {
        parent::__construct();
        
        //echo "<p>Nuevo Controllador main</p>";
    }

    function render(){
        $this->view->render('manual/index');
    }

}

?>