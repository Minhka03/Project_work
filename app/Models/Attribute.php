<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

   protected $table = 'attributes';
   protected $fillable = ['name' , 'value' , 'content'];
   

    public function pro_att()
    {
        return $this->hasMany(Product_Att::class , 'id_att' , 'id');
    }
   


   




}
