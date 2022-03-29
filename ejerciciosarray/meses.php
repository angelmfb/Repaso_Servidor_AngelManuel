<html>
	<head>
		<title>MESES</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<h3>Sacar el total de meses que hay en el array</h3>
		<h1>MESES</h1>
		<?php
            $meses = array(
                1=>"enero",
                2=>"febrero",
                3=>"marzo",
                4=>"abril",
                5=>"mayo",
                6=>"junio",
                7=>"julio",
                8=>"agosto",
                9=>"septiembre",
                10=>"octubre",
                11=>"noviembre",
                12=>"diciembre");

            //En el count se pone el nombre del array
            echo 'Total de meses:'.count($meses);
		?>
	</body>
</html>