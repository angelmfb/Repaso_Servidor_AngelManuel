<html>
	<head>
		<title>DIAS DE LA SEMANA</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<h3>Hacer un array con los dias de la semana, que lo recorramos y su índice sea el nombre del día</h3>
		<h1>DIAS DE LA SEMANA</h1>
		<?php
		$dias = array(
		' lunes '=>' 1 ',
		' martes '=>' 2 ',
		' miercoles '=>' 3 ',
		' jueves '=>' 4 ',
		' viernes '=>' 5 ',
		' sabado '=>' 6 ',
		' domingo '=>' 7 ');
		//el nombre del array es $dias, cojemos $dia como variable del índice y $numdias como el valor de cada índice
		foreach ($dias as $dia => $numdias)
		{
			echo '<b> El dia '.$dia .'</b> es '. $numdias;
			echo nl2br("\n");
		}
		?>
	</body>
</html>