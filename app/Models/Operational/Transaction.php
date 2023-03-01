<?php

namespace App\Models\Operational;

use App\Models\Operational\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Transaction extends Model
{
	// use HasFactory;
	use SoftDeletes;

	// declare table
	public $table = 'transactions';

	//this field must type date yyyy-mm-dd hh:mm:ss
	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	//declare fillable
	protected $fillable = [
		'appointment_id',
		'fee_doctor',
		'fee_specialist',
		'fee_hospital',
		'sub_total',
		'vat',
		'total',
		'created_at',
		'updated_at',
		'deleted_at',
	];

	/**
	 * Get the appointment that owns the Transaction
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function appointment(): BelongsTo
	{
		return $this->belongsTo(Appointment::class, 'appointment_id', 'id');
	}
}
