<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Angel Manuel Fernandez Baños">
        <link rel="stylesheet" href="../css/estilo.css">
        <title>Formulario</title>
    </head>
    <body>
        <h1>TAR-3T. 02 Formularios, arrays, funciones</h1>
        <!--Creamos el formulario con todos sus campos-->
        <form action="#" method="post">
            <label>Categoría :</label><br />
            <select name="categoria">
                <option value="navidad">Navidad</option>
                <option value="semanaIgnaciana">Semana Ignaciana</option>
                <option value="fiestas">Fiestas Escolares</option>
            </select><br />
            <br />
            <label>Nombre Actividad :</label>
            <input type="text" name="actividad" placeholder="Actividad"><br />
            <br />
            <label>ETAPAS:</label><br />
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
            //La versión 1 va a guardar los campos del formulario rellenos en un array y los va  a recorrer con un foreach y los va a mostar
            if(isset($_POST['enviar'])){
                foreach($_POST as $nombre=>$resultado){
                    echo "$nombre : $resultado<br />";
                }
            }

            //La versión 2 va a tener 2 funciones una para recoger los adatos y otra que lo muestre y tiene que redirigir a otra página
            //Función que recoge los datos del formulario
            function Recoger_formulario(){

            }

            //Función que muestra los datos del formulario
            function Mostar_datos(){

            }
        ?>
    </body>
</html>