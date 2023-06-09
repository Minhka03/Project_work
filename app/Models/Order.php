<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'email' , 'phone' , 'address' , 'token' , 'order_note' , 'shipping_method', 'payment_method', 'cus_id' , 'token'];

    public function cus()
    {
        return $this->hasOne(Customer::class , 'id' , 'cus_id');
    }

    public function details()
    {
        return $this->hasMany(OrderDetail::class , 'order_id' , 'id');
    }

    public function totalPrice() {

        $total = 0;

        foreach ($this->details as $item) {

            $total += $item->price * $item->quantity;
        }

        return $total;
    }
}
