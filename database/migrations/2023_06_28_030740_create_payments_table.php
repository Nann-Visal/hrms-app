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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->float('hour');
            $table->float('late_time');
            $table->bigInteger('main_salary');
            $table->float('ot_hour');
            $table->bigInteger('ot_salary');
            $table->date('date_pay');
            $table->String('pat_method');
            $table->String('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
