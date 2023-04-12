<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\User;
use App\Models\ManagementAccess\Permission;
use App\Models\ManagementAccess\PermissionRole;
use App\Models\ManagementAccess\RoleUser;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Role extends Model
{
	// use HasFactory;
	use SoftDeletes;

	// declare table
	public $table = 'roles';

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
	 * The user that belong to the Role
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function users(): BelongsToMany
	{
		return $this->belongsToMany(User::class);
	}

	/**
	 * The permission that belong to the Role
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function permission(): BelongsToMany
	{
		return $this->belongsToMany(Permission::class);
	}

	/**
	 * Get all of the role_users for the Role
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function role_users(): HasMany
	{
		return $this->hasMany(RoleUser::class, 'role_id');
	}

	/**
	 * Get all of the permission_roles for the Role
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function permission_roles(): HasMany
	{
		return $this->hasMany(PermissionRole::class, 'role_id');
	}
}
