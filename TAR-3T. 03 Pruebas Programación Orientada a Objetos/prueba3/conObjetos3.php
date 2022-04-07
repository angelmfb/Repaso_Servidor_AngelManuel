<?php
    //Creamos la clase y los dos métodos
    class conObjetos3{
        //Hay que poner la variable en pública sinó, si es privado no la pilla en el otro archivo
        public $meses;
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
    }
?>
