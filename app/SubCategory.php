<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
   protected $table='sub_category';
   protected $primaryKey = 'id';
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
   protected $dateFormat = 'Y-m-d H:i:s';
   protected $fillable= [
   	'categoryID',
   	'sub_category_en',
   	'sub_category_ch',
   	'brief_en',
   	'brief_ch',
   ];
}
