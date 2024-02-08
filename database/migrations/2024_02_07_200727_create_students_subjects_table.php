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
        Schema::create('students_subjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("students_id")
                  ->constrained("students")
                  ->onDeleteCascade();
           $table->unsignedBigInteger("subjects_id")
                  ->constrained("subjects")
                  ->onDeleteCascade();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_subjects');
    }
};
