<?php

 class Database
{

    public static function getConnection () {

        $host = "127.0.0.1";
        $port = 3000;
        $user = "root";
        $dbname = "toDoList";

        return new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user);

    }

}
