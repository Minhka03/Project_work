<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Authenticatable
{
   

    use HasApiTokens, HasFactory, Notifiable;

    // protected $guard = 'customers';
    protected $table = 'customers';

   protected $fillable = ['name' , 'email' , 'password' , 'confirm_password'];


   protected $hidden = [
    'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


  
}
