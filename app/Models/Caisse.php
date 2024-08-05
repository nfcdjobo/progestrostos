<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Caisse extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'caisses';

    protected $fillable  = [ 'id', 'activite_id', 'name', 'status' ];

    public function caisse(): BelongsTo
    {
        return $this->belongsTo(Caisse::class);
    }

    public function activite()
    {
        return $this->belongsTo(Activite::class);
    }

}
