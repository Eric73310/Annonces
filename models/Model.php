<?php


abstract class Model 
{
    private static $_bdd;
    
    private static function setBdd()
    {
        self::$_bdd = new PDO('mysql:host=localhost;dbname=annonce;charset=utf8', 'root', '');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBdd()
    {
        if(self::$_bdd = null)
        $this->setBdd(); 
        return self::$_bdd;
    }

    protected function getAll($table, $obj)
    {
        $var = [];
        $req = $this->getbdd("'SELECT * FROM' .table. 'ORDER BY id'");
        while($date = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor('produits', 'Article');
    }
}