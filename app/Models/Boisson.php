<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Boisson extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'boissons';

    protected $fillable  = [ 'id', 'name', 'quantite', 'prix_unitaire', 'prix_total', 'categorie' ];


    // public function ventes()
    // {
    //     return $this->hasMany(Vente::class, 'boisson_id');
    // }

    public function activite()
    {
        return $this->belongsTo(Activite::class);
    }

}
