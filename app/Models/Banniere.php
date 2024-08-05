<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banniere extends Model
{
    use HasFactory;

    protected $table = 'bannieres';

    protected $fillable  = [ 'id', 'raison_sociale', 'marge', 'email', 'telephone', 'slogan', 'signature', 'logo' ];
}
