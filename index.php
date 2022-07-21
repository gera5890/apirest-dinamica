<?php

//depuracion de errores

ini_set('display_errors', '1'); //visualizar errores en postman o navegador
ini_set("log_errors", '1');    //para crear archivo a nivel global
ini_set("error_log","/opt/lampp/htdocs/apirest-dinamica/php_error_log");  //ruta para que aparezca el archivo errores

include_once "models/connection.php";

//comprobar conexion
echo '<pre>'; print_r(Connection::connect()); echo '</pre>';

return;

include_once "controllers/routesControllers.php";

$index = new RoutesController();
$index ->index();