<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable  = [ 'id', 'stocke_id', 'departement_id', 'name', 'reference', 'quantite', 'prix_achat', 'frais_divers', 'prix_achat_unitaire', 'depense_combinee', 'prix_vente_unitaire', 'prix_vente_totale', 'revenu_unitaire', 'revenu' ];

    public function stocke()
    {
        return $this->belongsTo(Stocke::class, 'stocke_id');
    }

    public function departements()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }
}
