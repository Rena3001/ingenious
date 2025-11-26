<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('teams', function (Blueprint $table) {

            // Names
            $table->string('name_de')->nullable();
            $table->string('name_es')->nullable();

            // Positions
            $table->string('position_de')->nullable();
            $table->string('position_es')->nullable();

            // Descriptions
            $table->text('desc_de')->nullable();
            $table->text('desc_es')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn([
                'name_de','name_es',
                'position_de','position_es',
                'desc_de','desc_es',
            ]);
        });
    }
};
