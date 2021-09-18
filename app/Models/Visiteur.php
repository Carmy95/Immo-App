<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function bien()
    {
        return $this->hasMany(Bien::class);
    }
    public function message_visiteur()
    {
        return $this->BelongsTo(Message_visiteur::class);
    }
}
