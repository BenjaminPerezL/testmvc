<?php $mensaje_err='';?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Servicio de medioambiente del gobierno de Chile</title>
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">
    </head>
<body>
    

        <div class="banner"><img src="<?php echo constant('URL'); ?>public/img/logo-principal.png"></div>
        <div class="logogob"><img src="<?php echo constant('URL'); ?>public/img\logo-03.png" width="100px" height="100px"></div>
        <div id="navbar">
            <ul style="padding-left: 200px;">
                <li id="panel"></li>
                
                
                <li><a href="<?php echo constant('URL'); ?>manual">Ver Manual de Uso</a></li>
                
            </ul>
        </div>
        
    <div class="register-text"><h1>Registrarse</h1></div>
    <div class="form-register">
        <form method="POST" action="" class="form">
            <input class="field" type="text" name="username" placeholder="Usuario" required>
            <input class="field" type="password" name="password" placeholder="Contraseña" required>
            <input class="field" type="password" name="confirm_password" placeholder="Confirmar Contraseña" required>
            <br><label class="mensajeerr" style=color:red;size:2rem;> <?php echo $this->mensaje;?></label><br><br>
            <input class="send" type="submit" name="send" placeholder="Enviar">
        </form>
        
        <a class="login" href="<?php echo constant('URL'); ?>login">Ya tengo una cuenta</a>
    </div>
</body>
</html>