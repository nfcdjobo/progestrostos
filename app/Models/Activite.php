<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Activite extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'activites';

    protected $fillable  = [ 'id', 'name' ];


    public function boissons()
    {
        return $this->hasMany(Boisson::class, 'activite_id');
    }

    public function plats()
    {
        return $this->hasMany(Plat::class, 'activite_id');
    }

    public function caisses()
    {
        return $this->hasMany(Caisse::class, 'activite_id');
    }

    public function produits()
    {
        return $this->hasMany(Produit::class, 'activite_id');
    }

    public function tables()
    {
        return $this->hasMany(Table::class, 'activite_id');
    }

    public function stocke_restaurants()
    {
        return $this->hasMany(Article::class, 'activite_id');
    }

    public function menus()
    {
        return $this->hasMany(Menu::class, 'activite_id');
    }

    public function vents()
    {
        return $this->hasMany(Vente::class, 'activite_id');
    }

    public function stockes()
    {
        return $this->hasMany(Stocke::class, 'activite_id');
    }

    public function departements()
    {
        return $this->hasMany(Departement::class, 'activite_id');
    }

}
