<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    use HasFactory;
    use HasFactory;

    protected $guarded = ['id'];

    public function bien()
    {
        return $this->hasMany(Bien::class);
    }
}
