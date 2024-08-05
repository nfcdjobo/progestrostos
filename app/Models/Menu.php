<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable  = [ 'id', 'details', 'reference', 'date', 'repas_id' ];

    public function repas()
    {
        return $this->belongsTo(Repas::class);
    }


    public function plat()
    {
        return $this->hasMany(Plat::class);
    }

    public function vents()
    {
        return $this->hasMany(Vente::class);
    }
}
