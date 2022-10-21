<?php
    require_once "lib/nusoap.php";
    function getfrutas($datos) {
        if ($datos == "frutas") {
            return join(",", array(
                "manzana",
                "uva",
                "pera",
                "sandia",
                "fresas",
                "piña",
                "naranja"));
        }
        else {
                return "no hay frutas";
        }        

    }
    $SERVER = new soap_server();//creamos instancia de soap
    $SERVER->register("getfrutas");//indica el metodo o funcion a devolver 
   if ( lisset($HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
    $SERVER->service($HTTP_RAW_POST_DATA);
?>