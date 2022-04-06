<?php

namespace App\Models;

use DateTime;
class Produit extends Model{

    public $table = 'produits';
    public $created_at;

    public function getCreatedAt(): string
    {
        return (new DateTime($this->created_at))->format('d/m/Y');
    }

}

?>