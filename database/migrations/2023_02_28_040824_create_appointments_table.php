<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('appointments', function (Blueprint $table) {
			$table->id();
			$table->foreignId('doctor_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
			$table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
			$table->foreignId('consultation_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
			$table->enum('level', [1, 2, 3]);
			$table->date('date')->nullable();
			$table->time('time')->nullable();
			$table->enum('status', [1, 2]);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('appointments');
	}
};
