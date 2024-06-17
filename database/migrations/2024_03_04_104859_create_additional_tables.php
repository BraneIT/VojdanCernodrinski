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
        Schema::create('finansiski_dokumenti', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file');
            $table->string('slug')->unique();
            $table->integer('category_id');
            $table->string('year');
            $table->timestamps();
        });
          Schema::create('takmicenja', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file');
            $table->string('slug')->unique();
            $table->integer('category_id');
            $table->string('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional_tables');
    }
};
