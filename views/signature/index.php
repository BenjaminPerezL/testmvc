<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php require 'views/header.php'; ?>
    <div class="controlpanel">
            <!-- <ul id="user-actions">
                <li><a href="#Login">Iniciar Sesión</a></li>
                <li><a href="#">Cerrar Sesión</a></li>
                <li><a href="#">Registrarse</a></li>
                <li><a href="#">Recuperar Contraseña</a></li>
            </ul> -->
        </div>
    

    <div>
        <form action="<?php echo constant('URL');?>signature/registroFirma" method="post">
        <p>
            <label for="firma">Firma</label>
            <input type="text" name="firma" id="">

        </p>
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="">

        </p>
        <p>
            <label for="ministerio">Ministerio</label>
            <input type="text" name="ministerio" id="">

        </p>
        <p>
            <input type="submit" value="Registrar firma">
        </p>
        </form>

    </div>

    <?php require 'views/footer.php'; ?>



</body>

</html>