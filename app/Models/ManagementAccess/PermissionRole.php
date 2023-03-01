<?php

namespace App\Models\ManagementAccess;

use App\Models\ManagementAccess\Role;
use Illuminate\Database\Eloquent\Model;
use App\Models\ManagementAccess\Permission;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class PermissionRole extends Model
{
	// use HasFactory;
	use SoftDeletes;

	// declare table
	public $table = 'permission_roles';

	//this field must type date yyyy-mm-dd hh:mm:ss
	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	//declare fillable
	protected $fillable = [
		'permission_id',
		'role_id',
		'created_at',
		'updated_at',
		'deleted_at',
	];

	/**
	 * Get the permission that owns the PermissionRole
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function permission(): BelongsTo
	{
		return $this->belongsTo(Permission::class, 'permission_id', 'id');
	}

	/**
	 * Get the role that owns the PermissionRole
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function role(): BelongsTo
	{
		return $this->belongsTo(Role::class, 'role_id', 'id');
	}
}
