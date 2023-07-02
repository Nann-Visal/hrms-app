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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->String('full_name');
            $table->String('phone_number');
            $table->date('date_of_birth');
            $table->String('email');
            $table->String('address');
            $table->String('bank_account');
            $table->date('start_date');
            $table->integer('salary');
            $table->String('position');
            $table->String('cv');
            $table->String('profile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
