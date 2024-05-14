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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users'); 
<<<<<<<< HEAD:database/migrations/2024_05_14_052739_create_bookings_table.php
            $table->unsignedBigInteger('hall_id');
            $table->foreign('hall_id')->references('id')->on('halls'); 
========
>>>>>>>> bbcafb2d0b96512e7f096eb72ccd2579f5c4cf1e:database/migrations/2024_05_05_051216_create_bookings_table.php
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('reason')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
