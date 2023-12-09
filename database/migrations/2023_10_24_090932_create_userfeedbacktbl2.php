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
        Schema::create('userfeedbacks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reportedby')->constrained('users');
            $table->string('name')->nullable();
            $table->string('contact')->nullable();
            $table->string('rating');
            $table->string('issues');
            $table->string('suggestions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userfeedbacks');
    }
};
