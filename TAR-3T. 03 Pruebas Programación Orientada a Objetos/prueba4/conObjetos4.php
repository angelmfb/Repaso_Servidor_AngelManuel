<?php
    //Creamos la clase y los dos métodos
    class conObjetos4{
        //Pasamos $meses a la función para que la pille y la pueda mostrar
        function visualizar($meses){
            foreach ($meses as $mes => $numdias)
            {
                echo '<b> El mes '.$mes .'</b> es '. $numdias;
                echo nl2br("\n");
            }
        }
    }
?>
