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
        Schema::table('services', function (Blueprint $table) {

            // Section 3 Title (3 dil)
            $table->string('section3_title_az')->nullable();
            $table->string('section3_title_en')->nullable();
            $table->string('section3_title_ru')->nullable();

            // Section 3 Description (3 dil)
            $table->text('section3_description_az')->nullable();
            $table->text('section3_description_en')->nullable();
            $table->text('section3_description_ru')->nullable();

            // Skills list (JSON array)
            $table->json('section3_skills')->nullable();

            // Background image
            $table->string('section3_background')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'section3_title_az', 'section3_title_en', 'section3_title_ru',
                'section3_description_az', 'section3_description_en', 'section3_description_ru',
                'section3_skills',
                'section3_background',
            ]);
        });
    }

};
