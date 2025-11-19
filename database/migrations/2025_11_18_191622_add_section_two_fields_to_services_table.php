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

        // Section 2 Title (3 dil)
        $table->string('section2_title_az')->nullable();
        $table->string('section2_title_en')->nullable();
        $table->string('section2_title_ru')->nullable();

        // Section 2 Description (3 dil)
        $table->text('section2_description_az')->nullable();
        $table->text('section2_description_en')->nullable();
        $table->text('section2_description_ru')->nullable();

        // List maddələri (ul-li) – JSON array
        $table->json('section2_list')->nullable();

        // Button text/link
        $table->string('section2_button_text_az')->nullable();
        $table->string('section2_button_text_en')->nullable();
        $table->string('section2_button_text_ru')->nullable();

        $table->string('section2_button_link')->nullable();

        // Background şəkli
        $table->string('section2_background')->nullable();
    });
}

public function down(): void
{
    Schema::table('services', function (Blueprint $table) {
        $table->dropColumn([
            'section2_title_az','section2_title_en','section2_title_ru',
            'section2_description_az','section2_description_en','section2_description_ru',
            'section2_list',
            'section2_button_text_az','section2_button_text_en','section2_button_text_ru',
            'section2_button_link',
            'section2_background',
        ]);
    });
}

};
