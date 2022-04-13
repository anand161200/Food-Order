<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    
    protected $fillable = [
        
        'user_name',
        'first_name',
        'last_name',
        'email',
        'date_of_birth',
        'city',
        'state',
        'address',
        'contact_number',
        'Zip_code',
        'password',
    ];

    public $timestamps = false;

   
}
