<?php

class DB{
    static function getInstance(){
        return new PDO("mysql:host=localhost;dbname=projeto_biblioteca", "root" , "");
    }
}

DB::getInstance();

?>