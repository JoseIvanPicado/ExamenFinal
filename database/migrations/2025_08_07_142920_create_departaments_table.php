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
        Schema::create('departaments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('employees_id')->unsigned();
            $table->foreign('employees_id')->references('id')->
            on('employees')->onDelete('cascade')->onUpdate('cascade');

            $table->string('name_departament', 80);
            $table->string('location', 100);
            $table->string('description', 500);
            $table->string('state', 30);
            $table->integer('capacity_staff');

            $table->integer('bosses_id')->unsigned();
            $table->foreign('bosses_id')->references('id')->
            on('bosses')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('charges_id')->unsigned();
            $table->foreign('charges_id')->references('id')->
            on('charges')->onDelete('cascade')->onUpdate('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departaments');
    }
};
