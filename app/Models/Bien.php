<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function quartier()
    {
        return $this->BelongsTo(Quatier::class);
    }
    public function etat()
    {
        return $this->BelongsTo(Etat::class);
    }
    public function contrat()
    {
        return $this->BelongsTo(Contrat::class);
    }
    public function offre()
    {
        return $this->hasMany(Offre::class);
    }
    public function photo()
    {
        return $this->hasMany(Photo::class);
    }
}
