<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



use App\Models\MasterData\Specialist;
use App\Models\Operational\Appointment;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Doctor extends Model
{
	// use HasFactory;
	use SoftDeletes;

	// declare table
	public $table = 'doctors';

	//this field must type date yyyy-mm-dd hh:mm:ss
	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	//declare fillable
	protected $fillable = [
		'specialist_id',
		'name',
		'fee',
		'photo',
		'license',
		'description',
		'created_at',
		'updated_at',
		'deleted_at',
	];

	/**
	 * Get the specialist that owns the Doctor
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function specialist(): BelongsTo
	{
		return $this->belongsTo(Specialist::class, 'specialist_id', 'id');
	}

	/**
	 * Get all of the appointments for the Doctor
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function appointments(): HasMany
	{
		return $this->hasMany(Appointment::class, 'doctor_id');
	}

	/**
	 * Get the user that owns the Doctor
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}
}
