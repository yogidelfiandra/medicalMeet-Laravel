<?php

namespace App\Models\MasterData;

use App\Models\Operational\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Consultation extends Model
{
	// use HasFactory;
	use SoftDeletes;

	// declare table
	public $table = 'consultations';

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
	 * Get all of the appointments for the Consultation
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function appointments(): HasMany
	{
		return $this->hasMany(Appointment::class, 'appointment_id');
	}
}
