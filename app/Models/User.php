<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nom',
        'premons',
        'sexe',
        'date2naissance',
        'lieu2naissance',
        'tel',
        'mobile',
        'fonction',
        'enligne',
        'photo',
        'active',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function emetteur()
    {
        return $this->hasMany(Message::class,'emetteur');
    }

    public function recepteur()
    {
        return $this->hasMany(User::class,'receveur');
    }

    public function contrat()
    {
        return $this->hasMany(Contrat::class);
    }

    public function role()
    {
        return $this->belongsToMany(Role::class,'user_roles','user_id','role_id');
    }
}
