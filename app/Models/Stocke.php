<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocke extends Model
{
    use HasFactory;

    protected $table = 'stockes';

    protected $fillable  = [ 'id', 'activite_id', 'reference', 'montant', 'categorie', 'contenu' ];

    public function activite()
    {
        return $this->belongsTo(Activite::class, 'activite_id');
    }

    public function articles()
    {
        return $this->hasMany(Article::class, 'stocke_id');
    }
}
