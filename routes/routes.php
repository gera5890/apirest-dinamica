<?php

//capturamos lo que viene en la url con esta propiedad para saber que parametros llegan de GET
//echo '<pre>' ; print_r($_SERVER['REQUEST_URI']); echo '</pre>';

//convertir la uri en una variable
//explode crea un arreglo separando el indice con el character que se ordene
//y limpiamos los indices vacios con array_filter

/**
 * Cuando no se hacen peticiones
 */

$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);


//Si no hay ninguna peticion mandamos a 404 not found
if(count($routesArray) == 0){
    $json = array(
        "status" => 404,
        "result" => "Not found"
    );
    
    //mandamos el error a postman o a la web con http_response_code
    echo json_encode($json, http_response_code($json['status']));

    return;
}

/**
 * Cuando si se hacen peticiones
 */

 if (count($routesArray) == 1 and isset($_SERVER['REQUEST_METHOD'])) {

    //nos dice que tipo de peticion llega get, delete, put, 
    //echo '<pre>'; print_r($_SERVER['REQUEST_METHOD']); echo '</pre>';

    /**
     * Peticiones GET
     */

     if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $json = array(
            'status' => 200,
            'result' => "Solicitud GET"
        );

        echo json_encode($json, http_response_code($json['status']));
     }

     /**
      * Peticiones POST
      */

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $json = array(
            'status' => 200,
            'result' => 'Metodo POST'
        );

        echo json_encode($json, http_response_code($json['status']));
    }

    /**
     * Metodo PUT
     */

    if($_SERVER['REQUEST_METHOD'] == 'PUT'){
        $json = array(
            'status' => 200,
            'result' => "Metodo PUT"
        );

        echo json_encode($json, http_response_code($json['status']));
    }

    /**
     * Metodo DELETE
     */

    if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
        $json = array(
            'status' => 200,
            'result' => "Metodo DELETe"
        );

        echo json_encode($json, http_response_code($json['status']));
    }

 }

