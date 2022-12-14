<?php

class DB
{
    private $host;
    private $db;
    private $user;
    private $password;

    public function __construct()
    {
        $this->host = 'localhost:3310';
        $this->db = 'mediclinic';
        $this->user = 'root';
        $this->password = '';
    }

    function connect()
    {
        try {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;
        } catch (PDOException $exception) {
            print_r('Error connection: ' . $exception->getMessage());
        }
    }

}