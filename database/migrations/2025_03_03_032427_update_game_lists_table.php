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
        Schema::table('game_lists', function (Blueprint $table) {
            // Drop existing columns
            $table->dropColumn([
                'game_id',
                'game_code',
                'game_name',
                'game_type',
                'method',
                'is_h5_support',
                'maintenance',
                'game_lobby_config',
                'other_name',
                'has_demo',
                'sequence',
                'game_event',
                'game_provide_code',
                'game_provide_name',
            ]);

            // Add new columns
            $table->string('code')->after('id');
            $table->string('name')->after('code');
            $table->bigInteger('click_count')->default(0)->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('game_lists', function (Blueprint $table) {
            // Revert the changes if the migration is rolled back
            $table->dropColumn(['code', 'name', 'click_count']);

            // Add back the original columns
            $table->unsignedBigInteger('game_id')->index();
            $table->string('game_code', 50);
            $table->string('game_name', 100);
            $table->unsignedInteger('game_type');
            $table->string('method');
            $table->boolean('is_h5_support');
            $table->string('maintenance')->nullable();
            $table->string('game_lobby_config')->nullable();
            $table->json('other_name')->nullable();
            $table->boolean('has_demo');
            $table->unsignedInteger('sequence');
            $table->string('game_event')->nullable();
            $table->string('game_provide_code', 50);
            $table->string('game_provide_name', 100);
        });
    }
};