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
        Schema::table('moutons', function (Blueprint $table) {
            $table->text('description')->after('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('moutons', function (Blueprint $table) {
            $table->dropColumn(array_merge([
                'description',
            ],  []));
        });
    }
};
