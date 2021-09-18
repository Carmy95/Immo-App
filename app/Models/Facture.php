<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function paiement()
    {
        return $this->hasMany(Paiement::class);
    }
    public function contrat()
    {
        return $this->BelongsTo(Contrat::class);
    }
}
