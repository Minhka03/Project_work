<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_Item extends Model
{
    use HasFactory;

   protected $table = 'cart_items';

   protected $fillable = ['id_cart' , 'id_att'];

  

}
