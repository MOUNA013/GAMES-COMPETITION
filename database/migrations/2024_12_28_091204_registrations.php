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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // Correction
            $table->foreignId('competition_id')->constrained('competitions'); // Correction
            $table->enum('status', ['en_attente', 'accepté', 'rejeté'])->default('en_attente');
            $table->integer('score')->default(0);
            $table->timestamp('registration_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations'); 
}
};
