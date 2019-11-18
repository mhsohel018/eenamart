<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
   protected $table='homepage';
   protected $primaryKey = 'id';
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
   protected $dateFormat = 'Y-m-d H:i:s';
   protected $fillable= [
   	'banner',
   	'welcome_msg_en',
   	'welcome_msg_ch',
   	'about_msg_en',
   	'about_msg_ch',
   	'about_msg_photo_en',
   	'about_msg_photo_ch',
   	'service_msg_en',
      'service_msg_ch',
      'service_one_en',
      'service_one_ch',
      'service_two_en',
      'service_two_ch',
      'service_three_en',
      'service_three_ch',
      'service_four_en',
      'service_four_ch',
   	'middle_part_title_en',
   	'middle_part_photo',
   	'middle_part_msg_en',
   	'middle_part_msg_ch',
   	'latest_product_msg_en',
   	'latest_product_msg_ch',
   	'featured_msg_en',
   	'featured_one_title_en',
   	'featured_one_title_ch',
   	'featured_two_title_en',
   	'featured_two_title_ch',
   	'featured_three_title_en',
   	'featured_three_title_ch',
   	'featured_one_photo',
   	'featured_two_photo',
   	'featured_three_photo',
   	'featured_one_id',
   	'featured_two_id',
   	'featured_three_id',
   	'our_product_msg_en',
   	'our_product_msg_ch',
   	'subscribe_msg_en',
   	'subscribe_msg_ch',
   ];
}
