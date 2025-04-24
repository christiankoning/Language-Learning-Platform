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
        Schema::table('timed_attempts', function (Blueprint $table) {
            $table->unsignedInteger('attempt_number')->after('time_ms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('timed_attempts', function (Blueprint $table) {
            $table->dropColumn('attempt_number');
        });
    }
};
