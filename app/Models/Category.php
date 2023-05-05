<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

        protected  $table = 'product_categories';
        protected $fillable = ['name' , 'status' , 'image'];

        public function product()
        {
            return $this->hasMany(Product::class , 'id' , 'product_category_id'); 
        }

}
