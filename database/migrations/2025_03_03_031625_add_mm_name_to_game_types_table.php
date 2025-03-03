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
        Schema::table('game_types', function (Blueprint $table) {
            // Add the new column after the 'name' column
            $table->string('name_mm')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('game_types', function (Blueprint $table) {
            // Drop the column if the migration is rolled back
            $table->dropColumn('name_mm');
        });
    }
};