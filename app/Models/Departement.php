<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $table = 'departements';

    protected $fillable  = [ 'id', 'name', 'activite_id' ];

    public function activite()
    {
        return $this->belongsTo(Activite::class, 'activite_id');
    }

    public function stockes()
    {
        return $this->hasMany(Stocke::class, 'departement_id');
    }

    public function article()
    {
        return $this->hasMany(Article::class, 'departement_id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'departement_id');
    }


}
