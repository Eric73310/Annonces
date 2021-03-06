<?php

class Database{
   

    private $host = "localhost";
    private $db_name = "annonces";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection(){
   
        //$this->conn = null;
   
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password 
            ,[

                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET CHARACTER SET UTF8'
                ]);
        }catch(PDOException $exception){
            "Connection error: " . $exception->getMessage();
        }
   
        return $this->conn;
    }
}
$database = new Database();
$db = $database->getConnection();
?>