<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sliders', function (Blueprint $table) {

            // Titles
            $table->string('title_de')->nullable();
            $table->string('title_es')->nullable();

            // Descriptions
            $table->text('description_de')->nullable();
            $table->text('description_es')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('sliders', function (Blueprint $table) {
            $table->dropColumn([
                'title_de',
                'title_es',
                'description_de',
                'description_es',
            ]);
        });
    }
};
