<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
    public function Bien()
    {
        return $this->hasOne(Bien::class);
    }
    public function facture()
    {
        return $this->hasMany(Facture::class);
    }
}
