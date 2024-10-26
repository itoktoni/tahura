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

        Schema::table('users', function ($table) {

            $table->string('key')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('place_birth')->nullable();
            $table->string('date_birth')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('gender')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('illness')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('community')->nullable();
            $table->string('jersey')->nullable();
            $table->string('relationship')->nullable();
            $table->string('reference_id')->nullable();
            $table->string('is_paid')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('amount')->nullable();
            $table->string('is_receive')->nullable();
            $table->integer('id_event')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {


            $table->dropColumn('key');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('place_birth');
            $table->dropColumn('date_birth');
            $table->dropColumn('address');
            $table->dropColumn('phone');
            $table->dropColumn('country');
            $table->dropColumn('province');
            $table->dropColumn('city');
            $table->dropColumn('blood_type');
            $table->dropColumn('illness');
            $table->dropColumn('emergency_contact');
            $table->dropColumn('comunity');
            $table->dropColumn('cloth_size');
            $table->dropColumn('relationship');
            $table->dropColumn('reference_id');

        });
    }
};
