<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h4>Formulario de registro sin estilos</h4>
        
        <form name="registro" action="../Controladores/controladorPrincipal.php" method="POST">
            <input type="text" name="nombre" placeholder="Tu nombre">
            <input type="email" name="correo" placeholder="Correo electrónico">
            <input type="password" name="pass" placeholder="Contraseña">
            <input type="password" name="repitePass" placeholder="Repite la contraseña">
            <input type="submit" name="registro" value="Registrarme">
        </form>
        
    </body>
</html>
