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
        Schema::create('our_services_sections', function (Blueprint $table) {
            $table->id();
            $table->integer('sort_order')->default(0);
             /* =====================
               SECTION BACKGROUND – 19
            ====================== */
            $table->string('background_image')->nullable();

            /* =====================
               SECTION TITLE – 20
            ====================== */
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_zh')->nullable();

            /* =====================
               SECTION DESCRIPTION – 20.1
            ====================== */
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_zh')->nullable();

            /* =================================================
               SERVICE 1 – Guides & Tutorials (21 → 21.3)
            ================================================= */
            $table->string('service_1_icon')->nullable(); // icon class
            $table->string('service_1_title_az')->nullable();
            $table->string('service_1_title_en')->nullable();
            $table->string('service_1_title_ru')->nullable();
            $table->string('service_1_title_es')->nullable();
            $table->string('service_1_title_de')->nullable();
            $table->string('service_1_title_fr')->nullable();
            $table->string('service_1_title_zh')->nullable();

            $table->text('service_1_text_az')->nullable();
            $table->text('service_1_text_en')->nullable();
            $table->text('service_1_text_ru')->nullable();
            $table->text('service_1_text_es')->nullable();
            $table->text('service_1_text_de')->nullable();
            $table->text('service_1_text_fr')->nullable();
            $table->text('service_1_text_zh')->nullable();

            $table->string('service_1_button_url')->nullable();

            /* =================================================
               SERVICE 2 – FAQ (22 → 22.3)
            ================================================= */
            $table->string('service_2_icon')->nullable();
            $table->string('service_2_title_az')->nullable();
            $table->string('service_2_title_en')->nullable();
            $table->string('service_2_title_ru')->nullable();
            $table->string('service_2_title_es')->nullable();
            $table->string('service_2_title_de')->nullable();
            $table->string('service_2_title_fr')->nullable();
            $table->string('service_2_title_zh')->nullable();

            $table->text('service_2_text_az')->nullable();
            $table->text('service_2_text_en')->nullable();
            $table->text('service_2_text_ru')->nullable();
            $table->text('service_2_text_es')->nullable();
            $table->text('service_2_text_de')->nullable();
            $table->text('service_2_text_fr')->nullable();
            $table->text('service_2_text_zh')->nullable();

            $table->string('service_2_button_url')->nullable();

            /* =================================================
               SERVICE 3 – Warranty & Service (23 → 23.3)
            ================================================= */
            $table->string('service_3_icon')->nullable();
            $table->string('service_3_title_az')->nullable();
            $table->string('service_3_title_en')->nullable();
            $table->string('service_3_title_ru')->nullable();
            $table->string('service_3_title_es')->nullable();
            $table->string('service_3_title_de')->nullable();
            $table->string('service_3_title_fr')->nullable();
            $table->string('service_3_title_zh')->nullable();

            $table->text('service_3_text_az')->nullable();
            $table->text('service_3_text_en')->nullable();
            $table->text('service_3_text_ru')->nullable();
            $table->text('service_3_text_es')->nullable();
            $table->text('service_3_text_de')->nullable();
            $table->text('service_3_text_fr')->nullable();
            $table->text('service_3_text_zh')->nullable();

            $table->string('service_3_button_url')->nullable();

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
        Schema::dropIfExists('our_services_sections');
    }
};
