<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MasterData\Consultation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConsultationSeederTable extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$consultation = [
			[
				'name' => 'Jantung Sesak',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'name' => 'Tekanan Darah Tinggi',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'name' => 'Gangguan Irama Jantung',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
		];

		Consultation::insert($consultation);
	}
}
