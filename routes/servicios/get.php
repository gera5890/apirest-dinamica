<?php
require_once "controllers/getController.php";

//necesitamos saber que viene en la peticio
$table = ($routesArray[1]);

$response = new GetController();
$response ->getData($table);


