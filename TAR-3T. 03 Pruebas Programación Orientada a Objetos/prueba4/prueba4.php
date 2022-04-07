<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba4</title>
</head>
<body>
    <h1>Meses con objetos</h1>
    <?php
        //Ponemos la ruta para la clase
        require_once __DIR__. "/conObjetos4.php";
        //crear el objeto
        $modelo = new conObjetos4;
        //creamos la variable con el array
        $meses=array(
            ' enero '=>' 31 ',
            ' febrero '=>' 28 ',
            ' marzo '=>' 31 ',
            ' abril '=>' 30 ',
            ' mayo '=>' 31 ',
            ' junio '=>' 30 ',
            ' julio '=>' 31 ',
            ' agosto '=>' 31 ',
            ' septiembre '=>' 30 ',
            ' octubre '=>' 31 ',
            ' noviembre '=>' 30',
            ' diciembre '=>' 31 ');
        //Llamamos a la función y le pasamos la variable con el array ya creado
        $modelo->visualizar($meses);
    ?>
</body>
</html>