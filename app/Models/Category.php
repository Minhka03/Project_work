<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

        protected  $table = 'product_categories';
        protected $fillable = ['name' , 'status' , 'image'];

        public function product_cate()
        {
            return $this->hasMany(Product::class , 'product_category_id' , 'id'); 
        }



}
