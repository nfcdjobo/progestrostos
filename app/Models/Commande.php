<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Commande extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'commandes';
    protected $fillable = [ 'id', 'activite_id', 'coordinateur', 'reference', 'titre', 'detail', 'decision', 'status' ];

    public function activite(): BelongsTo
    {
        return $this->belongsTo(Activite::class);
    }

    public function coordinateur()
    {
        return $this->belongsTo(User::class, 'coordinateur');
    }

    public function tresorier()
    {
        return $this->belongsTo(User::class, 'tresorier');
    }

}
