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
        Schema::create('absences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->
            on('employees')->onDelete('cascade')->onUpdate('cascade');

            $table->date('date_in');
            $table->date('date_end');
            $table->string('type', 80);
            $table->text('reasson');
            $table->string('status', 15);

            $table->integer('attendance_registration_id')->unsigned();
            $table->foreign('attendance_registration_id')->references('id')->
            on('attendance_registrations')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('boss_id')->unsigned();
            $table->foreign('boss_id')->references('id')->
            on('bosses')->onDelete('cascade')->onUpdate('cascade');

            /**
             * Ingresar boton para exportar documento de justificacion.
             */

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absences');
    }
};
