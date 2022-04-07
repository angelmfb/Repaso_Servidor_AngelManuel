<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba1</title>
</head>
<body>
    <h1>Meses con objetos</h1>
    <?php
        //Ponemos la ruta para la clase y llamamos a los métodos
        require_once __DIR__. "/conObjetos1.php";
        $modelo = new conObjetos1;
        $modelo->crear_array();
        $modelo->visualizar();
    ?>
</body>
</html>