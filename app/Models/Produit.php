<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Produit extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'produits';
    protected $fillable = [ 'id', 'name', 'quantite', 'prix_unitaire', 'prix_total', 'detail', 'status' ];

    public function activite()
    {
        return $this->belongsTo(Activite::class);
    }
}
