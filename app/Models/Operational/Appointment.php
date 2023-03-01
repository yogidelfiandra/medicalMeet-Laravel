<?php

namespace App\Models\Operational;

use App\Models\User;
use App\Models\Operational\Doctor;
use App\Models\MasterData\Consultation;
use App\Models\Operational\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Appointment extends Model
{
	// use HasFactory;
	use SoftDeletes;

	// declare table
	public $table = 'appointments';

	//this field must type date yyyy-mm-dd hh:mm:ss
	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	//declare fillable
	protected $fillable = [
		'doctor_id',
		'user_id',
		'consultation_id',
		'level',
		'date',
		'time',
		'status',
		'created_at',
		'updated_at',
		'deleted_at',
	];

	/**
	 * Get the doctor that owns the Appointment
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function doctor(): BelongsTo
	{
		return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
	}

	/**
	 * Get the transaction associated with the Appointment
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function transaction(): HasOne
	{
		return $this->hasOne(Transaction::class, 'appointment_id');
	}

	/**
	 * Get the user that owns the Appointment
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	/**
	 * Get the consultation that owns the Appointment
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function consultation(): BelongsTo
	{
		return $this->belongsTo(Consultation::class, 'consultation_id', 'id');
	}
}
