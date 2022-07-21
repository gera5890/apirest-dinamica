<?php


class Connection{

    /**
     * Informacion de la base de datos
     */

    public static function infoDatabase(){
        
        $infoDB = array(
            "hostname" => 'localhost',
            "database" => "database-1",
            "user" => "root",
            "pass" => ""
        );

        return $infoDB;
    }

    /**
     * Conexion de la DB
     */

    public static function connect(){

        try {
            $link = new PDO(
               "mysql:host=localhost;dbname=".
                Connection::infoDatabase()['database'],
                Connection::infoDatabase()['user'],
                Connection::infoDatabase()['pass']
            );

            $link->exec("set names utf8");
            return $link;
        } catch (PDOException $e) {
            die("Error: ". $e->getMessage());
        }

    }

}