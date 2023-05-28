<?php

class Database
{
    public $host;
    public $user;
    public $pass;
    public $db;

    private $connection;

    function __construct()
    {
        $this->connection = $this->connectToDatabase();
        return $this->connection;
    }

    function connectToDatabase()
    {
        try
        {
            $dsn = "mysql:host=localhost;dbname=herramientas_rental";                 
            $this->connection = new PDO($dsn,'root','');
            return  $this->connection;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}




