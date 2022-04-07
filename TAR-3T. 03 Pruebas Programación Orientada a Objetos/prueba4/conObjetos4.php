<?php
    //Creamos la clase y los dos métodos
    class conObjetos4{
        //Pasamos $meses que no tiene porque llamarse igual que en el otro archivo o si como se quiera.
        function visualizar($meses){
            foreach ($meses as $mes => $numdias)
            {
                echo '<b> El mes '.$mes .'</b> es '. $numdias;
                echo nl2br("\n");
            }
        }
    }
?>
