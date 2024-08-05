<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispatcher extends Model
{
    use HasFactory;

    protected $table = 'dispatchers';

    protected $fillable  = [ 'id', 'reference', 'detail', 'espace_id',  ];

    public function espace()
    {
        return $this->belongsTo(Espace::class, 'espace_id');
    }

    public function repas()
    {
        return $this->belongsTo(Repas::class, 'repas_id');
    }


}
