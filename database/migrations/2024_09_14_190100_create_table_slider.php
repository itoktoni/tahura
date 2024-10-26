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
        Schema::create('slider', function (Blueprint $table) {
            $table->integer('slider_id')->autoIncrement();
            $table->string('slider_name');
            $table->string('slider_title')->nullable();
            $table->string('slider_button')->nullable();
            $table->string('slider_link')->nullable();
            $table->string('slider_image')->nullable();
            $table->string('slider_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slider');
    }
};
