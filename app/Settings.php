<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
   protected $table='settings';
   protected $primaryKey = 'id';
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
   protected $dateFormat = 'Y-m-d H:i:s';
   protected $fillable= [
   	'source_brief_en',
   	'source_brief_ch',
   	'contact_brief_en',
   	'contact_brief_ch',
   	'map',
   	'address_en',
   	'address_ch',
   	'phone_en',
   	'phone_ch'
   
   ];
}
