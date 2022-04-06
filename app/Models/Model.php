<?php

namespace App\Models;

use Database\Database;
use PDO;

class Model{
    public $conn;
    public $table;

    public function __construct(Database $conn)
    {
        $this->conn = $conn;
    }

    public function all() : array
    {
        $select = $this->conn->getPDO()->prepare("SELECT * FROM {$this->table} ORDER BY date DESC");
        $select->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->conn]);
        $select->execute();
        return $select->fetchAll();

        // $stmt = $this->conn->getPDO()->prepare("SELECT * FROM {$this->table}");
        // $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->conn]);
        // return $stmt->fetchAll();
        //var_dump($stmt);
    }

    public function findById(int $id): Model
    {
        $select = $this->conn->getPDO()->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $select->setFetchMode(PDO::FETCH_CLASS, get_class($this),[$this->conn]);
        $select->execute([$id]);
        return $select->fetch();
    }
}



?>