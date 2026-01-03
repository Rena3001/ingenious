<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('warranty_process_sections', function (Blueprint $table) {
            $table->id();

            /* =====================
               BACKGROUND IMAGE
            ===================== */
            $table->string('background_image')->nullable();

            /* =====================
               MAIN TITLE (36)
            ===================== */
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_zh')->nullable();

            /* =====================
               MAIN DESCRIPTION (36.1)
            ===================== */
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_zh')->nullable();

            /* =====================
               ICON 1 — MISSION (37)
            ===================== */
            $table->string('icon_1')->nullable();

            $table->string('icon_1_title_az')->nullable();
            $table->string('icon_1_title_en')->nullable();
            $table->string('icon_1_title_ru')->nullable();
            $table->string('icon_1_title_de')->nullable();
            $table->string('icon_1_title_fr')->nullable();
            $table->string('icon_1_title_es')->nullable();
            $table->string('icon_1_title_zh')->nullable();

            $table->text('icon_1_desc_az')->nullable();
            $table->text('icon_1_desc_en')->nullable();
            $table->text('icon_1_desc_ru')->nullable();
            $table->text('icon_1_desc_de')->nullable();
            $table->text('icon_1_desc_fr')->nullable();
            $table->text('icon_1_desc_es')->nullable();
            $table->text('icon_1_desc_zh')->nullable();

            /* =====================
               ICON 2 — VISION (38)
            ===================== */
            $table->string('icon_2')->nullable();

            $table->string('icon_2_title_az')->nullable();
            $table->string('icon_2_title_en')->nullable();
            $table->string('icon_2_title_ru')->nullable();
            $table->string('icon_2_title_de')->nullable();
            $table->string('icon_2_title_fr')->nullable();
            $table->string('icon_2_title_es')->nullable();
            $table->string('icon_2_title_zh')->nullable();

            $table->text('icon_2_desc_az')->nullable();
            $table->text('icon_2_desc_en')->nullable();
            $table->text('icon_2_desc_ru')->nullable();
            $table->text('icon_2_desc_de')->nullable();
            $table->text('icon_2_desc_fr')->nullable();
            $table->text('icon_2_desc_es')->nullable();
            $table->text('icon_2_desc_zh')->nullable();

            /* =====================
               ICON 3 — VALUES (39)
            ===================== */
            $table->string('icon_3')->nullable();

            $table->string('icon_3_title_az')->nullable();
            $table->string('icon_3_title_en')->nullable();
            $table->string('icon_3_title_ru')->nullable();
            $table->string('icon_3_title_de')->nullable();
            $table->string('icon_3_title_fr')->nullable();
            $table->string('icon_3_title_es')->nullable();
            $table->string('icon_3_title_zh')->nullable();

            $table->text('icon_3_desc_az')->nullable();
            $table->text('icon_3_desc_en')->nullable();
            $table->text('icon_3_desc_ru')->nullable();
            $table->text('icon_3_desc_de')->nullable();
            $table->text('icon_3_desc_fr')->nullable();
            $table->text('icon_3_desc_es')->nullable();
            $table->text('icon_3_desc_zh')->nullable();

            /* =====================
               CTA BUTTON (40)
            ===================== */


            $table->string('button_link')->nullable();

            /* =====================
               STATUS
            ===================== */
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warranty_process_sections');
    }
};
