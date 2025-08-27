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
        Schema::create('incidences', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('employees_id')->unsigned();
            $table->foreign('employees_id')->references('id')->
            on('employees')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('departaments_id')->unsigned();
            $table->foreign('departaments_id')->references('id')->
            on('departaments')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('charges_id')->unsigned();
            $table->foreign('charges_id')->references('id')->
            on('charges')->onDelete('cascade')->onUpdate('cascade');

            $table->string('creation_date');
            $table->string('type', 80);
            $table->text('reasson', 500);
            $table->string('penalty', 255);
            $table->string('mediation', 100);
            $table->string('generated_by', 100);
            $table->string('status', 15);

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
        Schema::dropIfExists('incidences');
    }
};
