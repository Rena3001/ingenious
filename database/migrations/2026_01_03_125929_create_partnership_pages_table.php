<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('partnership_pages', function (Blueprint $table) {
            $table->id();

            /* =================================================
             | Page Title (7 languages)
             ================================================= */
            $table->string('page_title_az');
            $table->string('page_title_en');
            $table->string('page_title_ru');
            $table->string('page_title_de');
            $table->string('page_title_fr');
            $table->string('page_title_es');
            $table->string('page_title_zh');

            /* =================================================
             | Sidebar Title (7 languages)
             ================================================= */
            $table->string('sidebar_title_az');
            $table->string('sidebar_title_en');
            $table->string('sidebar_title_ru');
            $table->string('sidebar_title_de');
            $table->string('sidebar_title_fr');
            $table->string('sidebar_title_es');
            $table->string('sidebar_title_zh');

            /* =================================================
 | Category / Section Label (7 languages)
 ================================================= */
            $table->string('category_az')->nullable();
            $table->string('category_en')->nullable();
            $table->string('category_ru')->nullable();
            $table->string('category_de')->nullable();
            $table->string('category_fr')->nullable();
            $table->string('category_es')->nullable();
            $table->string('category_zh')->nullable();

            /* =================================================
             | Intro Text (7 languages)
             ================================================= */
            $table->text('intro_text_az')->nullable();
            $table->text('intro_text_en')->nullable();
            $table->text('intro_text_ru')->nullable();
            $table->text('intro_text_de')->nullable();
            $table->text('intro_text_fr')->nullable();
            $table->text('intro_text_es')->nullable();
            $table->text('intro_text_zh')->nullable();

            /* =================================================
             | Description Text (7 languages)
             ================================================= */
            $table->text('description_text_az')->nullable();
            $table->text('description_text_en')->nullable();
            $table->text('description_text_ru')->nullable();
            $table->text('description_text_de')->nullable();
            $table->text('description_text_fr')->nullable();
            $table->text('description_text_es')->nullable();
            $table->text('description_text_zh')->nullable();

            /* =================================================
             | Lists (JSON)
             ================================================= */
            $table->json('collaboration_types')->nullable();
            $table->json('principles')->nullable();

            $table->string('cta_button_link')->nullable();

            /* =================================================
             | Images (left side)
             ================================================= */
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();

            /* =================================================
             | Status
             ================================================= */
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partnership_pages');
    }
};
