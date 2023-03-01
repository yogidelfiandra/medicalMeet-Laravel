<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class RoleUser extends Model
{
	// use HasFactory;
	use SoftDeletes;

	// declare table
	public $table = 'role_users';

	//this field must type date yyyy-mm-dd hh:mm:ss
	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	//declare fillable
	protected $fillable = [
		'user_id',
		'role_id',
		'created_at',
		'updated_at',
		'deleted_at',
	];
}
