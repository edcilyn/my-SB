<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('courseName');
            $table->text('courseDescription');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};