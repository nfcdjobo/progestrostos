<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VIP extends Model
{
    protected $table = 'vip';

    protected $fillable = [ 'id', 'name'];

    use HasFactory;

    public function tables()
    {
        return $this->hasMany(Table::class);
    }


    
}
