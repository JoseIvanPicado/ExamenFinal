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
        Schema::create('charges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_chargues', 100);
            $table->string('type_charges', 40);
            $table->string('academic_level', 80);
            $table->text('experience_work');
            $table->text('requeriments');


            /**
             * Incluir boton para ingresar pdf
             */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charges');
    }
};
