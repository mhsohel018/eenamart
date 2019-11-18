<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
	protected $table='about';
	protected $primaryKey = 'id';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	protected $dateFormat = 'Y-m-d H:i:s';
	protected $fillable= [
	'photo',
	'brief_en',
	'brief_ch',
	];
}
