<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;


class Plat extends Model
{
    use HasFactory;

    use HasFactory, Notifiable;

    protected $table = 'plats';

    protected $fillable = [ 'id', 'name', 'activite_id', 'menu_id', 'repas_id', 'quantite', 'prix', 'prix_total' ];

    // public function ventes()
    // {
    //     return $this->hasMany(Vente::class, 'plat_id');
    // }

    public function activite()
    {
        return $this->belongsTo(Activite::class);
    }


    // Définir la relation avec le modèle Menu, si nécessaire
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    // Définir la relation avec le modèle Repas, si nécessaire
    public function repas()
    {
        return $this->belongsTo(Repas::class);
    }
}
