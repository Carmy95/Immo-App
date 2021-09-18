<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message_visiteur extends Model
{
    use HasFactory;
    use HasFactory;

    protected $guarded = ['id'];

    public function visiteur()
    {
        return $this->BelongsTo(Visiteur::class);
    }
    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
