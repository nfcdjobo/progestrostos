<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $fillable = [ 'id', 'montant', 'profile', 'vente_id'];

    public function vente()
    {
        return $this->belongsTo(Vente::class);
    }
}
