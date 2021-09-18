<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function facture()
    {
        return $this->BelongsTo(Facture::class);
    }
}
