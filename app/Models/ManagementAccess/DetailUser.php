<?php

namespace App\Models\ManagementAccess;

use App\Models\User;
use App\Models\MasterData\TypeUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class DetailUser extends Model
{
	// use HasFactory;
	use SoftDeletes;

	// declare table
	public $table = 'detail_users';

	//this field must type date yyyy-mm-dd hh:mm:ss
	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	//declare fillable
	protected $fillable = [
		'user_id',
		'type_user_id',
		'contact',
		'address',
		'photo',
		'gender',
		'created_at',
		'updated_at',
		'deleted_at',
	];

	/**
	 * Get the type_user that owns the DetailUser
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function type_user(): BelongsTo
	{
		return $this->belongsTo(TypeUser::class, 'type_user_id', 'id');
	}

	/**
	 * Get the user that owns the DetailUser
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}
}
