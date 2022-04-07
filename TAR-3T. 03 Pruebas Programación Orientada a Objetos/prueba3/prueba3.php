<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba3</title>
</head>
<body>
    <h1>Meses con objetos</h1>
    <?php
        //Ponemos la ruta para la clase
        require_once __DIR__. "/conObjetos3.php";
        $modelo = new conObjetos3;
        $modelo->crear_array();
        //Ponemos el nombre del objeto con la variable para que la pille de la clase
        foreach ($modelo->meses as $mes => $numdias)
        {
            echo '<b> El mes '.$mes .'</b> es '. $numdias;
            echo nl2br("\n");
        }
    ?>
</body>
</html>