


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
                
                
                <li><a href="https://cdn.discordapp.com/attachments/961776783663980567/998799896637341737/Manual.pdf">Ver Manual de Uso</a></li>
                
            </ul>
        </div>

    <div class="login-text"><h1>Iniciar Sesión</h1></div>
    <div class="form-login">
        <form method="POST" class="form" action="">
            <input class="field" type="text" name="username" placeholder="Usuario" required>
            <input class="field" type="password" name="password" placeholder="Contraseña"required>
            <input class="send" type="submit" name="send" placeholder="Enviar">
        </form>
        
        <a class="register" href="<?php echo constant('URL'); ?>registrar">Registrarse</a>
    </div>
    
</body>
</html>

