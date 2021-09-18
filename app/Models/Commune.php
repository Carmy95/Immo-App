<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;
    use HasFactory;

    protected $guarded = ['id'];

    public function quartier()
    {
        return $this->hasMany(Quatier::class);
    }
    public function ville()
    {
        return $this->BelongsTo(Ville::class);
    }
}
