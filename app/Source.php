<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
   protected $table='source';
   protected $primaryKey = 'id';
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
   protected $dateFormat = 'Y-m-d H:i:s';
   protected $fillable= [
   	'name_en',
      'name_ch',
   	'designation_en',
      'designation_ch',
   	'photo',
   	'description_en',
      'description_ch'
   

   ];
}
