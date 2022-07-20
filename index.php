<?php
require_once 'core/Controller.php';
require_once 'core/View.php';
require_once 'core/User.php';
require_once 'core/User_session.php';
require_once 'core/Model.php';
require_once 'core/App.php';
require_once 'core/Database.php';
require_once 'config/config.php';

    

 

include_once 'core/User.php';
include_once 'core/User_session.php';


$app = new App();
$userSession = new UserSession();
$user = new User();


if(isset($_SESSION['user'])){
    //echo 'hay sesion';
    $user->setUser($userSession->getCurrentUser());
    include_once 'views/inicio/index.php';

}else if(isset($_POST['username']) && isset($_POST['password'])){
        echo 'validacion';

        $userForm = $_POST['username'];
        $passForm = $_POST['password'];
         
        $user = new User();

        if($user->userExists($userForm,$passForm)){
            echo 'user validado';
            $userSession->setCurrentUser($userForm);
            $user->setUser($userForm);
            
            include_once 'views/inicio/index.php';
        }else{
            echo 'datos incorrectos';
            echo $userForm,$passForm;
            $errorLogin = "Nombre de usuario y/o password incorrecto";
            include_once 'views/login/index.php';
        }

}else{
    echo 'login';
    include_once 'views/login/index.php';
}



?>
