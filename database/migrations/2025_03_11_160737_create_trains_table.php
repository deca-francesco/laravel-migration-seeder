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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            // campi aggiunti
            $table->string("company", 50);
            $table->string("departure_station", 100);
            $table->string("arrival_station", 100);
            $table->time("departure_time");
            $table->time("arrival_time");
            $table->string("train_code", 10);
            $table->boolean("on_time");
            $table->boolean("cancelled");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
