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
        Schema::create('whistleblowerreps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reportedby')->constrained('users');
            $table->string('fname');
            $table->string('lname');
            $table->string('contactno');
            $table->string('email')->nullable();
            $table->string('name_accused');
            $table->string('position');
            $table->string('department');
            $table->text('misconduct');
            $table->string('persons_involved');
            $table->date('date_of_incident');
            $table->text('further_infos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whistleblowerreps');
    }
};
