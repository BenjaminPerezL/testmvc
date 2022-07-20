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
                <li style="color: white;text-align: center;text-decoration: none;font-weight: light 300;"><img src="https://openclipart.org/image/2400px/svg_to_png/247319/abstract-user-flat-3.png" style="object-fit:fill;height:1rem;width:1rem"><!-- </?php echo ' '.$username ?> -->Benja</li>
                <li><a href="<?php echo constant('URL'); ?>main">Inicio</a></li>
                <li><a href="<?php echo constant('URL'); ?>signature">Firmar Documentos</a></li>
                <li><a href="<?php echo constant('URL'); ?>review">Revisar Documentos</a></li>
                <li><a href="<?php echo constant('URL'); ?>manual">Ver Manual de Uso</a></li>
                <li><a href="<?php echo constant('URL'); ?>logout">Cerrar Sesion</a></li>
            </ul>
        </div>
    </body>
</html>