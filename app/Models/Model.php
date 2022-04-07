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

    public function create(array $data, ?array $relations = null)
    {
        $firstParenthesis = ""; // valeur après INSERT INTO
        $secondParenthesis = ""; // valeur après VALUES
        $i = 1;

        foreach ($data as $key => $comma) {
            $comma = $i === count($data) ? "" : ", "; // Si $i est strictement = au count de $data => on est arrivé à la fin alors on ne met rien sinon on met une virgule et un espace.
            $firstParenthesis .= "{$key}{$comma}"; // .= pour cumuler les valeurs
            $secondParenthesis .= ":{$key}{$comma}";
            $i++;
        }
        //var_dump($firstParenthesis, $secondParenthesis); //die();die();

        $select = $this->conn->getPDO()->prepare("INSERT INTO {$this->table} ($firstParenthesis)
        VALUES($secondParenthesis)");
        $select->execute($data);
        
}
}


?>