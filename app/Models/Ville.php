<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function commune()
    {
        return $this->hasMany(Commune::class);
    }
}
