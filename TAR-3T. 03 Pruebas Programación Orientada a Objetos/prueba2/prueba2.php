<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba2</title>
</head>
<body>
    <h1>Meses con objetos</h1>
    <?php
        //Ponemos la ruta para la clase
        require_once __DIR__. "/conObjetos2.php";
        $modelo = new conObjetos2;
        $modelo->visualizar();
    ?>
</body>
</html>