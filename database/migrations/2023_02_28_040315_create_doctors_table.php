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
		Schema::create('doctors', function (Blueprint $table) {
			$table->id();
			$table->foreignId('specialist_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
			$table->string('name');
			$table->string('fee');
			$table->longText('photo')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('doctors');
	}
};
