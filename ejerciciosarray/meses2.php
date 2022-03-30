<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meses 2</title>
    </head>
    <body>
        <h3>Recorrer el array de los meses del año y sacar los días que tiene cada uno, usamos foreach completo</h3>
		<h1>MESES</h1>
        <?php
            //mostr
            $meses = array(
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

            //el nombre del array es $meses, cojemos $mes como variable del índice y $numdias como el valor de cada índice
            foreach ($meses as $mes => $numdias)
            {
                echo '<b> El mes '.$mes .'</b> es '. $numdias;
                echo nl2br("\n");
            }
		?>
    </body>
</html>