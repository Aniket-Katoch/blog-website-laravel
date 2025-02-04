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
        Schema::table('posts', function (Blueprint $table) {
            // Add the category_id column.
            // Using `foreignId` will create an unsigned BIGINT by default.
            $table->foreignId('category_id')
                  ->after('user_id') // Optional: adjust the column order if needed
                  ->constrained('categories')
                  ->onDelete('cascade'); // Adjust the delete behavior as needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // First, drop the foreign key constraint
            $table->dropForeign(['category_id']);
            // Then drop the column
            $table->dropColumn('category_id');
        });
    }
};
