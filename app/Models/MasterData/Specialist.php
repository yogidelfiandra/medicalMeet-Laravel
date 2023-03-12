<?php

namespace App\Models\MasterData;

use App\Models\Operational\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Specialist extends Model
{
	// use HasFactory;
	use SoftDeletes;

	// declare table
	public $table = 'specialists';

	//this field must type date yyyy-mm-dd hh:mm:ss
	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	//declare fillable
	protected $fillable = [
		'name',
		'price',
		'description',
		'created_at',
		'updated_at',
		'deleted_at',
	];

	/**
	 * Get all of the doctors for the Specialist
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function doctors(): HasMany
	{
		return $this->hasMany(Doctor::class, 'specialist_id');
	}
}
