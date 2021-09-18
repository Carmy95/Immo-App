<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quatier extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function bien()
    {
        return $this->hasMany(Bien::class);
    }
    public function commune()
    {
        return $this->BelongsTo(Commune::class);
    }
}
