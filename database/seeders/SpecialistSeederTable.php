<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MasterData\Specialist;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialistSeederTable extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$specialist = [
			[
				'name' => 'Dermatologist',
				'price' => '250000',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'name' => 'Dentist',
				'price' => '450000',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'name' => 'Neurologist',
				'price' => '300000',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'name' => 'Allergist',
				'price' => '250000',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'name' => 'Cardiologist',
				'price' => '320000',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
		];

		Specialist::insert($specialist);
	}
}
