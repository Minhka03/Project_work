<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'email' , 'phone' , 'address' , 'token' , 'order_note' , 'shipping_method', 'payment_method', 'cus_id' , 'token'];
}
