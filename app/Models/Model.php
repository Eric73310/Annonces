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

    public function create(Model $data, ?array $relations = null)
    {
        $keys=[];
        $inter=[];
        $values=[];
        // $firstParenthesis = ""; // valeur après INSERT INTO
        // $secondParenthesis = ""; // valeur après VALUES
        // $i = 1;
        // array_push($data, $this->$tableauinsert );
        foreach ($data as $key => $value) {
            if($value != null && $key != 'table' && $key != 'conn'){
            $keys[ ]=$key;
            $inter[]="?";
            $values[]=$value;
            }
            // $comma = $i === count($data) ? "" : ", "; // Si $i est strictement = au count de $data => on est arrivé à la fin alors on ne met rien sinon on met une virgule et un espace.
            // $firstParenthesis .= "{$key}{$comma}"; // .= pour cumuler les valeurs
            // $secondParenthesis .= ":{$key}{$comma}";
            // $i++;
        }
        $colonne=implode(",",$keys);
        $stringInter=implode(",",$inter);
        //echo "<pre>",print_r($_FILES),"</pre>";  die();
        //var_dump($firstParenthesis, $secondParenthesis); //die();
        $select = $this->conn->getPDO()->prepare("INSERT INTO {$this->table} ($colonne)
        VALUES($stringInter)");
        $select->execute($values);
        
        
}

}



?>