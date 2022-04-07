<?php

namespace App\Models;

use DateTime;
class Produit extends Model{

    public $table = 'produits';

    public function getCreatedAt(): string
    {
        return (new DateTime($this->date))->format('d/m/Y');
    }

    public function create(array $data, ?array $relation = null)
    {
        parent::create($data);

        return true;
    }

}

?>