<?php

namespace App\Models;

use Database\Database;
use PDO;

class Produit{

    public $conn;
    public $table = 'produits';

    public function __construct(Database $conn)
    {
        $this->conn = $conn;
    }

    public function all() 
    {
        // $select = $this->conn->getConnection()->prepare("SELECT * FROM {$this->table}");
        // $select->execute();
        // $result =$select->fetchAll(PDO::FETCH_ASSOC);
        $stmt = $this->conn->getPDO()->prepare("SELECT * FROM {$this->table}");
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->conn]);
        return $stmt->fetchAll();
        //var_dump($stmt);
    }
}

?>