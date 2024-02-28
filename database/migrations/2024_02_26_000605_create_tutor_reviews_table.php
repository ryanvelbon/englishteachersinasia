<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tutor_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutor_id')->constrained()->onDelete('cascade');
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->text('content');
            $table->unsignedTinyInteger('rating'); // 1 to 5 (integer)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tutor_reviews');
    }
};
