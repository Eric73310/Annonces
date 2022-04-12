<?php

namespace App\Models;

use DateTime;
class Produit extends Model{

    // protected $id;
    protected $titre;
    protected $description;
    protected $prix;
    protected $categorie;
    protected $image1;
    protected $image2;
    protected $image3;
    protected $image4;
    protected $image5;
    public $table = 'produits';


    public function getCreatedAt(): string
    {
        return (new DateTime($this->date))->format('d/m/Y');
    }

    // public function getId()
    // {
    //     return $this->id;
    // }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getImage1()
    {
        return $this->image1;
    }

    public function setImage1($image1)
    {
        $this->image1 = $image1;
        return $this;
    }

    public function getImage2()
    {
        return $this->image2;
    }

    public function setImage2($image2)
    {
        $this->image2 = $image2;
        return $this;
    }

    public function getImage3()
    {
        return $this->image3;
    }

    public function setImage3($image3)
    {
        $this->image3 = $image3;
        return $this;
    }

    public function getImage4()
    {
        return $this->image4;
    }

    public function setImage4($image4)
    {
        $this->image4 = $image4;
        return $this;
    }

    public function getImage5()
    {
        return $this->image5;
    }

    public function setImage5($image5)
    {
        $this->image5 = $image5;
        return $this;
    }

    public function create(Model $data, ?array $relation = null)
    {
        parent::create($data);

        return true;
    }

}

?>