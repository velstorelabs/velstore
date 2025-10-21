<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Vendor extends Authenticatable
{
    use Notifiable;

    protected $guard = 'vendor';

    protected $fillable = ['name', 'email', 'password', 'phone', 'status', 'profile_image'];

    protected $hidden = ['password'];

    protected $casts = ['password' => 'hashed'];
}
