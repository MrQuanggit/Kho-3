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
        'role_id',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUserImage () {
//        return '/storage/avatars/' .ltrim($this->user_image, '/public/avatars/');
        return "https://quangvoc8.s3.amazonaws.com/".$this->user_image;
    }

    function role()
    {
        return $this->belongsTo(Role::class, 'role_id','id');
    }

    public $timestamps = false;
}
