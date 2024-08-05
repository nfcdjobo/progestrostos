<?php
namespace App\Http\Utils;

class OrderVentePropeerties {
    public $plat;
    public $name;
    public $quantite;
    public $prix;
    public $prix_total;

    public function __construct($plat, $plat_name, $prix, $quantite) {
        $this->plat = $plat;
        $this->name = $plat_name;
        $this->quantite = (int)$quantite;
        $this->prix = (double)$prix;
        $this->prix_total = (double)$prix * (int)$quantite;

    }
}


