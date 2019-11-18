<?php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
   protected $table='products';
   protected $primaryKey = 'id';
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
   protected $dateFormat = 'Y-m-d H:i:s';
   protected $fillable= [
   	'sub_categoryID',
   	'categoryID',
   	'name_ch',
   	'name_en',
   	'description_ch',
   	'description_en',
   	'brandID',
   	'status',
   	'mrp_ch',
   	'mrp_en',
   	'unit_ch',
   	'uni_en',
   	'photo',
   	'price_ch',
   	'price_en',
   
   ];
}
