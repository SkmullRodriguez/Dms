<?php
class Database{
    private function __construct() {
        ;
    }
    public static function getConnection(){
        return new PDO("mysql:host=localhost:3307; dbname=proyecto_integrador","admin","admin");
    }
}
