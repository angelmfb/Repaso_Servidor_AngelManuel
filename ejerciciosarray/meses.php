<html>
	<head>
		<title>MESES</title>
	</head>
	<body>
		<h3>Sacar el total de meses que hay en el array</h3>
		<h1>MESES</h1>
		<?php
            $meses = array(
                0=>"enero",
                1=>"febrero",
                2=>"marzo",
                3=>"abril",
                4=>"mayo",
                5=>"junio",
                6=>"julio",
                7=>"agosto",
                8=>"septiembre",
                9=>"octubre",
                10=>"noviembre",
                11=>"diciembre");

            //En el count se pone el nombre del array
            echo '<h3>Con el count</h3>';
            echo 'Total de meses:'.count($meses)."<br />";
            //El count te devuelve el numero de elemntos que son 12 y para recorrerlo con el for seria count -1 o poner que sea menor

            //Recorrer con el for
            echo '<h3>Recorrido con el for</h3>';
            for($i=0;$i<=count($meses)-1;$i++){
                echo 'El mes '.$i.' es '.$meses[$i]. '. ';
                echo nl2br("\n");
            }

            //Recorrer con el foreach abreviado
            echo '<h3>Recorrido con el foreach</h3>';
            foreach ($meses as $resultado){
                echo  $resultado;
                echo nl2br("\n");
            }
		?>
	</body>
</html>