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
        Schema::create('faq_sections', function (Blueprint $table) {
            $table->id();
             /* =====================
               BACKGROUND
            ====================== */
            $table->string('background_image')->nullable();

            /* =====================
               TITLES (MULTI-LANG)
            ====================== */
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_zh')->nullable();

            /* =====================
               DESCRIPTIONS (MULTI-LANG)
            ====================== */
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_zh')->nullable();

            /* =====================
               FEATURES (3 ITEMS)
               icon = flaticon / font-awesome class
            ====================== */
            // Feature 1
            $table->string('feature_1_icon')->nullable();
            $table->string('feature_1_title_az')->nullable();
            $table->string('feature_1_title_en')->nullable();
            $table->string('feature_1_title_ru')->nullable();
            $table->string('feature_1_title_es')->nullable();
            $table->string('feature_1_title_de')->nullable();
            $table->string('feature_1_title_fr')->nullable();
            $table->string('feature_1_title_zh')->nullable();
            $table->text('feature_1_text_az')->nullable();
            $table->text('feature_1_text_en')->nullable();
            $table->text('feature_1_text_ru')->nullable();
            $table->text('feature_1_text_es')->nullable();
            $table->text('feature_1_text_de')->nullable();
            $table->text('feature_1_text_fr')->nullable();
            $table->text('feature_1_text_zh')->nullable();

            // Feature 2
            $table->string('feature_2_icon')->nullable();
            $table->string('feature_2_title_az')->nullable();
            $table->string('feature_2_title_en')->nullable();
            $table->string('feature_2_title_ru')->nullable();
            $table->string('feature_2_title_es')->nullable();
            $table->string('feature_2_title_de')->nullable();
            $table->string('feature_2_title_fr')->nullable();
            $table->string('feature_2_title_zh')->nullable();
            $table->text('feature_2_text_az')->nullable();
            $table->text('feature_2_text_en')->nullable();
            $table->text('feature_2_text_ru')->nullable();
            $table->text('feature_2_text_es')->nullable();
            $table->text('feature_2_text_de')->nullable();
            $table->text('feature_2_text_fr')->nullable();
            $table->text('feature_2_text_zh')->nullable();

            // Feature 3
            $table->string('feature_3_icon')->nullable();
            $table->string('feature_3_title_az')->nullable();
            $table->string('feature_3_title_en')->nullable();
            $table->string('feature_3_title_ru')->nullable();
            $table->string('feature_3_title_es')->nullable();
            $table->string('feature_3_title_de')->nullable();
            $table->string('feature_3_title_fr')->nullable();
            $table->string('feature_3_title_zh')->nullable();
            $table->text('feature_3_text_az')->nullable();
            $table->text('feature_3_text_en')->nullable();
            $table->text('feature_3_text_ru')->nullable();
            $table->text('feature_3_text_es')->nullable();
            $table->text('feature_3_text_de')->nullable();
            $table->text('feature_3_text_fr')->nullable();
            $table->text('feature_3_text_zh')->nullable();

            /* =====================
               BUTTON
            ====================== */
            $table->string('button_url')->nullable();

            /* =====================
               MAIN IMAGE
            ====================== */
            $table->string('image')->nullable();

            /* =====================
               STATUS
            ====================== */
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faq_sections');
    }
};
