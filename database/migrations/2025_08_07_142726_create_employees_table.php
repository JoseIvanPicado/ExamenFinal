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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('gender', 10);
            $table->string('marital_status', 12);
            $table->string('number_phone', 9)->unique();
            $table->string('emergency_contact_phone', 10)->nullable();
            $table->string('emergency_contact_name');
            $table->string('mail')->unique();
            $table->string('nacionality', 60);
            $table->string('educative_level', 2);
            $table->string('identification', 10);
            $table->text('adress', 500);
            $table->date('hire_date');
            $table->string('position', 30);
            $table->string('departament', 50);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
