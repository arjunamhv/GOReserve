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
        Schema::table('gors', function (Blueprint $table) {
            $table->string('gor_banner')->after('user_id')->nullable();
            $table->string('gor_photos')->after('gor_banner')->nullable();
            $table->string('contact')->after('address')->nullable();
            $table->string('facility')->after('opening_hour')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gors', function (Blueprint $table) {
            $table->dropColumn('gor_banner');
            $table->dropColumn('gor_photos');
            $table->dropColumn('contact');
            $table->dropColumn('facility');
        });
    }
};