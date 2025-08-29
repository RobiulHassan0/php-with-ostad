<?php

class Database {
    private $host = 'localhost';
    private $username = 'robi';
    private $password = 'robi';
    private $database = 'corephp';
    public $connection;

    public function __construct()
    {
        try{
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}