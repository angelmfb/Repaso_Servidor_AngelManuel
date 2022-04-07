<?php
    //Creamos la clase y los dos métodos
    class conObjetos2{
        private $meses;
        //función para darle los valores
        function crear_array(){
            $this->meses=array(
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
        }
        //con esta funcion visualizamos todo el array
        function visualizar(){
            //Llamamos al método crear_array desde aqui
            $this->crear_array();
            foreach ($this->meses as $mes => $numdias)
            {
                echo '<b> El mes '.$mes .'</b> es '. $numdias;
                echo nl2br("\n");
            }
        }
    }
?>
