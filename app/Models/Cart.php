<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected  $fillable = ['name', 'image' , 'price' , 'quantity' , 'totalPrice' , 'id_pro' , 'id_cus'];

    public function pro()
    {
        return $this->hasOne(Product::class, 'id', 'id_pro');
    }

    public function cart_att()
    {
        return $this->belongsToMany(Attribute::class, 'cart_items' , 'id_cart' , 'id_att');
    }

    public function cus() {
        return $this->hasOne(Customer::class , 'id' , 'id_cus'); 
        
    }

    

}
