<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Angel Manuel Fernandez Baños">
        <link rel="stylesheet" href="../../css/estilo.css">
        <title>Formulario</title>
    </head>
    <body>
        <h1>TAR-3T. 02 Formularios, arrays, funciones</h1>
        <h3>Versión 1</h3>
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
            <input type="checkbox" value="Primaria" name="etapas[]"><br />
            <label>ESO </label>
            <input type="checkbox" value="ESO" name="etapas[]"><br />
            <label>Bachillerato </label> 
            <input type="checkbox" value="Bachillerato" name="etapas[]"><br />
            <label>CFGM</label>
            <input type="checkbox" value="CFGM" name="etapas[]"><br />
            <label>CFGS </label>
            <input type="checkbox" value="CFGS" name="etapas[]"><br />
            <br />
            <label>Actividad de Sección: </label>
            <input type="checkbox" value="Marcado" name="actividadSeccion"><br />
            <br />
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <?php
            //La versión 1 va a  coger todos los datos rellenos del formulario
            if(isset($_POST['enviar'])){
                echo 'Categoría: '.$_POST['categoria'];
                echo nl2br("\n");
                echo 'Nombre de la actividad: '.$_POST['actividad'];
                echo nl2br("\n");
                
                //Con esta me saca el indice y el valor de todos los que marque
                if(isset($_POST['etapas'])){
                    print_r($_POST['etapas']);
                }
                /*
                //Preguntar por empty también
                //Pregunto si existe porque si no lo marco no lo crea
                if(isset($_POST['etapas'])){
                    //Lo recorro para mostrar todos los valores 
                    foreach ($_POST['etapas'] as $resultado){
                        echo  'Valor etapa: '.$resultado;
                        echo nl2br("\n");
                    }
                }
                */
                //Pregunto si existe
                if(isset($_POST['actividadSeccion'])){
                    echo 'Actividad de Sección: '.$_POST['actividadSeccion'];
                }
                //Poner si es de clase o individual

            }
        ?>
    </body>
</html>