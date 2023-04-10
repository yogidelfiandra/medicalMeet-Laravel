<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;
use App\Models\ManagementAccess\Role;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


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

	/**
	 * Get the user that owns the RoleUser
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	/**
	 * Get the role that owns the RoleUser
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function role(): BelongsTo
	{
		return $this->belongsTo(Role::class, 'role_id', 'id');
	}
}
