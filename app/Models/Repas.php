<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Repas extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'repas';
    protected $fillable = [ 'id', 'name', 'quantite', 'prix_unitaire', 'prix_total', 'detail', 'status' ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function plats()
    {
        return $this->hasMany(Plat::class);
    }

    public function dispatchers()
    {
        return $this->hasMany(Dispatcher::class);
    }




}
