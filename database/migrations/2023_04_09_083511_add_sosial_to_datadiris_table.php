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
            $table->string('akungit')->nullable()->after('body');
            $table->string('akunig')->nullable()->after('body');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('datadiris', function (Blueprint $table) {
            if (Schema::hasColumn('datadiris', 'akungit', 'akunig')) {
                $table->dropColumn('akungit');
                $table->dropColumn('akunig');
            }
        });
    }
};
