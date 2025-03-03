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
        Schema::table('products', function (Blueprint $table) {
            // Drop existing columns
            $table->dropColumn(['provider_code', 'provider_name', 'is_active']);

            // Add new columns
            $table->string('code')->index()->after('id');
            $table->string('name')->after('code');
            $table->string('short_name')->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Revert the changes if the migration is rolled back
            $table->dropColumn(['code', 'name', 'short_name']);

            // Add back the original columns
            $table->string('provider_code', 50);
            $table->string('provider_name', 100);
            $table->boolean('is_active');
        });
    }
};