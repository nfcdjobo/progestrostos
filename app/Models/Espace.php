<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espace extends Model
{
    use HasFactory;

    protected $table = 'espaces';

    protected $fillable  = [ 'id', 'name' ];

    public function dispaces()
    {
        return $this->hasMany(Dispatcher::class, 'espace_id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'espace_id');
    }

}
