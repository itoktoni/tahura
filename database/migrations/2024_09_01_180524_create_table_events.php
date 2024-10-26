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
        Schema::create('events', function (Blueprint $table) {
            $table->integer('event_id')->autoIncrement();
            $table->string('event_slug');
            $table->string('event_name');
            $table->string('event_date')->nullable();
            $table->string('event_info')->nullable();
            $table->integer('event_price')->nullable();
            $table->string('event_image')->nullable();
            $table->text('event_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
