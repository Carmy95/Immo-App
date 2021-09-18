<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function emetteur()
    {
        return $this->BelongsTo(User::class);
    }
    public function recepteur()
    {
        return $this->BelongsTo(User::class);
    }
}
