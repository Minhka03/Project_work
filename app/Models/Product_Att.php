<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product_Att extends Model
{
    use HasFactory; 
  

   protected  $table = 'product_att';

   protected $fillable = ['id_pro','id_att'];

   

   public function product()
   {
      return $this->hasOne(Product::class, 'id', 'id_pro');
   }

   public function att()
   {
     return $this->hasOne(Attribute::class , 'id' , 'id_att');
   }




  


   
   

}
