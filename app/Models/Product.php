<?php

namespace App\Models;

// use App\Models\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory; use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    protected $table = 'products';
    protected $fillable = ['name', 'content', 'description', 'price', 'discount', 'status', 'product_category_id', 'image'];

    public function cate()
    {
        return $this->hasOne(Category::class, 'id', 'product_category_id');
    }

    public function img()
    {
        return $this->hasMany(Images::class, 'product_id', 'id');
    }

    public function pro_att()
    {
        return $this->hasMany(Product_Att::class, 'id_pro', 'id' );
    }

    public function pro_attribute()
    {
        return $this->belongsToMany(Attribute::class, 'product_att', 'id_pro', 'id_att');
        
    }

    



}
