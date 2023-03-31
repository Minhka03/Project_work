<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name' , 'content' , 'description', 'price' , 'discount' , 'status'  , 'product_category_id' , 'image'];

    public function cate()
    {
        return $this->hasOne(Category::class , 'id', 'product_category_id');
    }

    public function img()
    {
        return $this->hasMany(Images::class);
    }

   
}


