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
        Schema::create('bosses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('identification', 16)->unique();
            $table->string('number_phone', 9)->unique();
            $table->string('mail')->unique();
            $table->string('nacionality', 100);
            $table->date('years_old');
            $table->string('gender', 10);
            $table->string('marital_states', 12);
            $table->text('adress', 500);
            $table->string('emergency_contact_phone', 9)->nullable();
            $table->string('emergency_contact_name');
            $table->date('hire_date');
            $table->date('start_date_position');
            $table->string('position', 30);
            $table->string('departament_charge', 50);
            $table->integer('team_size');
            $table->decimal('budget_responsibility');
            $table->string('educative_level', 50);
            $table->string('work_experience', 500)->nullable();
            $table->string('photo')->nullable();
            $table->text('observations')->nullable();
            $table->string('status', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bosses');
    }
};
