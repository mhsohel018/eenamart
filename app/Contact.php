<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table='contact';
	protected $primaryKey = 'id';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	protected $dateFormat = 'Y-m-d H:i:s';
	protected $fillable= [
	'name',
	'email',
	'subject',
	'message',
	];
}
