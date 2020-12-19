<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $hidden = [
        'password',
    ];

    protected $fillable = [
        'user_name',
        'password',
        'user_email',
        'user_phone',
        'user_image',
        'status',
        'name',
        'role',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUserImage () {
        return '/storage/avatars/' .ltrim($this->user_image, '/public/avatars/');
    }

    function rolee()
    {
        return $this->belongsTo(Role::class, 'role','id');
    }

    public $timestamps = false;
}
