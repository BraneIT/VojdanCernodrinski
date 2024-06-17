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
      
        Schema::table('medjuetnicka_integracija', function (Blueprint $table) {
            $table->integer('end_year')->nullable()->change();
        });
        Schema::table('etvining', function (Blueprint $table) {
            $table->integer('end_year')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medjuetnicka_integracija', function (Blueprint $table) {
            $table->integer('end_year')->nullable(false)->change();
        });

        Schema::table('etvining', function (Blueprint $table) {
            $table->integer('end_year')->nullable(false)->change();
        });
    }
};
