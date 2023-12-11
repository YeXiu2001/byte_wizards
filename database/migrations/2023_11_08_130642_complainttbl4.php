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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reportedby')->constrained('users');
            $table->string('c_fname');
            $table->string('c_lname');
            $table->string('c_contactno');
            $table->string('c_email')->nullable();
            $table->string('c_name_accused');
            $table->string('c_position');
            $table->string('c_department');
            $table->text('offense');
            $table->text('narration');
            $table->date('date_of_incident');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
