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
        Schema::create('horaries', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->
            on('employees')->onDelete('cascade')->onUpdate('cascade');

            $table->Time('expected_input');
            $table->Time('expected_exit');
            $table->time('overtime');

            $table->integer('departament_id')->unsigned();
            $table->foreign('departament_id')->references('id')->
            on('departaments')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('boss_id')->unsigned();
            $table->foreign('boss_id')->references('id')->
            on('bosses')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horaries');
    }
};
