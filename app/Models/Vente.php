<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Vente extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'ventes';

    protected $fillable = [ 'id', 'detail', 'caissier', 'manager', 'montant', 'activite_id', 'table_id', 'reference'];

    public function caissier(): BelongsTo
    {
        return $this->belongsTo(User::class, 'caissier');
    }

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager');
    }

    // Relation avec le manager
    // public function manager(): BelongsTo
    // {
    //     return $this->belongsTo(User::class, 'manager');
    // }

     public function activite()
     {
         return $this->belongsTo(Activite::class, 'activite_id');
     }

     public function profiles()
    {
        return $this->hasMany(Profile::class);
    }

    public function table(): BelongsTo
    {
        return $this->belongsTo(Table::class, 'table_id');
    }

    

}
