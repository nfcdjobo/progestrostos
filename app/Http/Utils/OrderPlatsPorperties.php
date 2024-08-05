<?php
namespace App\Http\Utils;

class OrderPlatsPorperties {
    public $name;
    public $quantite;
    public $prix;
    public $prix_total;

    public function __construct($name, $quantite, $prix) {
        $this->name = $name;
        $this->quantite = (int)$quantite;
        $this->prix = (double)$prix;
        $this->prix_total = (double)$prix * (int)$quantite;

    }
}


