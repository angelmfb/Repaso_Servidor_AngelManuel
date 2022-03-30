<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Angel Manuel Fernandez Baños">
        <title>Formulario</title>
    </head>
    <body>
        <form action="#" method="post">
            <select name="categoria">
                <option value="navidad">Navidad</option>
                <option value="semanaIgnaciana">Semana Ignaciana</option>
                <option value="fiestas">Fiestas Escolares</option>
            </select><br />
            <br />
            <label>Nombre Actividad :</label>
            <input type="text" name="actividad" placeholder="Actividad"><br />
            <br />
            <label>ETAPAS:</label> <br />
            <label>Primaria </label>
            <input type="checkbox" name="primaria"><br />
            <label>ESO </label>
            <input type="checkbox" name="eso"><br />
            <label>Bachillerato </label>
            <input type="checkbox" name="bachillerato"><br />
            <label>CFGM</label>
            <input type="checkbox" name="cfgm"><br />
            <label>CFGS </label>
            <input type="checkbox" name="cfgs"><br />
            <br />
            <label>Actividad de Sección: </label>
            <input type="checkbox" name="actividadSeccion"><br />
            <br />
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <?php
            if(isset($_POST['enviar'])){
                foreach($_POST as $nombre=>$valor){
                    echo "$nombre : $valor<br>";
                }
            }
        ?>
    </body>
</html>