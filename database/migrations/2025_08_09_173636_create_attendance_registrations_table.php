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
        Schema::create('attendance_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('creation_date');
            $table->time('time_in');
            $table->time('time_exit');
            $table->integer('hours_worked');
            $table->integer('overtime');

            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->
            on('employees')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('charge_id')->unsigned();
            $table->foreign('charge_id')->references('id')->
            on('charges')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('incidence_id')->unsigned();
            $table->foreign('incidence_id')->references('id')->
            on('incidences')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_registrations');
    }
};
