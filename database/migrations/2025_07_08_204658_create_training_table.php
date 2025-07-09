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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->float('distance');
            $table->float('duration');
            $table->integer('total_calories');
            $table->integer('steps');
            $table->float('avg_pace');
            $table->float('max_pace');
            $table->integer('elevation_gain');
            $table->integer('avg_heart_rate');
            $table->integer('max_heart_rate');
            $table->integer('avg_cadence');
            $table->integer('max_cadence');
            $table->float('vo2_max');
            $table->string('source');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training');
    }
};
