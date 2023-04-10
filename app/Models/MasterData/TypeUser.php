<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\ManagementAccess\DetailUser;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TypeUser extends Model
{
	// use HasFactory;
	use SoftDeletes;

	// declare table
	public $table = 'type_users';

	//this field must type date yyyy-mm-dd hh:mm:ss
	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	//declare fillable
	protected $fillable = [
		'name',
		'created_at',
		'updated_at',
		'deleted_at',
	];

	/**
	 * Get all of the detail_users for the TypeUser
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function detail_users(): HasMany
	{
		return $this->hasMany(DetailUser::class, 'type_user_id');
	}
}
