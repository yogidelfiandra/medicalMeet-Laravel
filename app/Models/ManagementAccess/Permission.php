<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ManagementAccess\PermissionRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Permission extends Model
{
	// use HasFactory;
	use SoftDeletes;

	// declare table
	public $table = 'permissions';

	//this field must type date yyyy-mm-dd hh:mm:ss
	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	//declare fillable
	protected $fillable = [
		'title',
		'created_at',
		'updated_at',
		'deleted_at',
	];

	/**
	 * Get all of the permission_roles for the Permission
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function permission_roles(): HasMany
	{
		return $this->hasMany(PermissionRole::class, 'permission_id');
	}
}
