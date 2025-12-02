<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('about_mission_items', function (Blueprint $table) {
            $table->longText('icon')->change();
        });
    }

    public function down(): void
    {
        Schema::table('about_mission_items', function (Blueprint $table) {
            $table->string('icon')->change();
        });
    }
};
