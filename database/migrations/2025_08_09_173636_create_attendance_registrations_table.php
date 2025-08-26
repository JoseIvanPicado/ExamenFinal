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

            $table->integer('employees_id')->unsigned();
            $table->foreign('employees_id')->references('id')->
            on('employees')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('charges_id')->unsigned();
            $table->foreign('charges_id')->references('id')->
            on('charges')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('incidences_id')->unsigned();
            $table->foreign('incidences_id')->references('id')->
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
