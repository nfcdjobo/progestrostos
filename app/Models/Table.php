<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Table extends Model
{
    use HasFactory;

    protected $table = 'tables';

    protected $fillable = ['id', 'name', 'activite_id', 'vip_id'];

    public function activite(): BelongsTo
    {
        return $this->belongsTo(Activite::class, 'activite_id');
    }

    public function vip(): BelongsTo
    {
        return $this->belongsTo(VIP::class, 'vip_id');
    }

    public function vents()
    {
        return $this->hasMany(Vente::class);
    }

}
