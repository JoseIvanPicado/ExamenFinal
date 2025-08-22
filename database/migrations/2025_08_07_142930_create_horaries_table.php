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

            $table->integer('employees_id')->unsigned();
            $table->foreign('employees_id')->references('id')->
            on('employees')->onDelete('cascade')->onUpdate('cascade');

            $table->Time('expected_input');
            $table->Time('expected_exit');
            $table->time('overtime');

            $table->integer('departaments_id')->unsigned();
            $table->foreign('departaments_id')->references('id')->
            on('departaments')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('bosses_id')->unsigned();
            $table->foreign('bosses_id')->references('id')->
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
