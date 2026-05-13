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
    Schema::create('healthcare', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->enum('type', ['puskesmas', 'posyandu', 'poslansia', 'rsud']);
        $table->string('address');
        $table->string('phone')->nullable();
        $table->decimal('latitude', 10, 8)->nullable();
        $table->decimal('longitude', 11, 8)->nullable();
        $table->string('operating_hours')->nullable();
        $table->enum('status', ['active', 'inactive'])->default('active');
        $table->timestamps();
    });
}
};