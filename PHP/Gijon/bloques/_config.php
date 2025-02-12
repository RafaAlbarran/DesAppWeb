<?php

$debug = true;

function debugPrint_r($array){
    global $debug;
    if($debug)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
}

function cargarJSON($rutaArchivo){    
   
   if(file_exists($rutaArchivo)){
       $miJSON = file_get_contents($rutaArchivo);
       $miArray = json_decode($miJSON, true);
       return $miArray; //Devolvemos el valor que hay en la variable
   }
   else{
       echo 'No se puede abrir el archivo '.$rutaArchivo;
   }  
}

?>