<?php

require_once "connection.php";

class GetModel{

    public static function getData($table){

        $sql = "SELECT * FROM $table";
        $stmt = Connection::connect()->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS); //para que los datos no vengan como indices


    }

}