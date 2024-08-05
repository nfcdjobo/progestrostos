<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Consommation extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'consommations';
    protected $fillable = [ 'id', 'user_id', 'vente_id' ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function vente(): BelongsTo
    {
        return $this->belongsTo(Vente::class);
    }

}
