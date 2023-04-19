<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $table = 'product_images';
    protected $fillable = [ 'id' , 'images', 'product_id'];

    public function product()
    {
        return $this->hasOne(Product::class , 'id' , 'product_id');
    }
}
