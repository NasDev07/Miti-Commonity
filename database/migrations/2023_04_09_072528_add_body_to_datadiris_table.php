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
        Schema::table('datadiris', function (Blueprint $table) {
            $table->text('body')->nullable()->after('nim');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('datadiris', function (Blueprint $table) {
            if (Schema::hasColumn('datadiris', 'body')) {
                $table->dropColumn('body');
            }
        });
    }
};
