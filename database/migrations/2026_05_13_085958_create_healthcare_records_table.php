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
    Schema::create('healthcare_records', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('healthcare_id')->constrained('healthcare')->onDelete('cascade');
        $table->foreignId('booking_id')->constrained('healthcare_bookings')->onDelete('cascade');
        $table->date('visit_date');
        $table->string('doctor_name')->nullable();
        $table->text('diagnosis')->nullable();
        $table->text('prescription')->nullable(); // resep obat
        $table->text('notes')->nullable();
        $table->timestamps();
    });
}
};
