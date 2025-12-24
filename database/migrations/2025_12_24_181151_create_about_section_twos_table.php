<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_section_twos', function (Blueprint $table) {
            $table->id();

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
               PIE GRAPHS (4 ITEMS)
            ====================== */
            // 1
            $table->string('graph_1_title_az')->nullable();
            $table->string('graph_1_title_en')->nullable();
            $table->string('graph_1_title_ru')->nullable();
            $table->string('graph_1_title_es')->nullable();
            $table->string('graph_1_title_de')->nullable();
            $table->string('graph_1_title_fr')->nullable();
            $table->string('graph_1_title_zh')->nullable();
            $table->unsignedTinyInteger('graph_1_value')->nullable(); // 0–100

            // 2
            $table->string('graph_2_title_az')->nullable();
            $table->string('graph_2_title_en')->nullable();
            $table->string('graph_2_title_ru')->nullable();
            $table->string('graph_2_title_es')->nullable();
            $table->string('graph_2_title_de')->nullable();
            $table->string('graph_2_title_fr')->nullable();
            $table->string('graph_2_title_zh')->nullable();
            $table->unsignedTinyInteger('graph_2_value')->nullable();

            // 3
            $table->string('graph_3_title_az')->nullable();
            $table->string('graph_3_title_en')->nullable();
            $table->string('graph_3_title_ru')->nullable();
            $table->string('graph_3_title_es')->nullable();
            $table->string('graph_3_title_de')->nullable();
            $table->string('graph_3_title_fr')->nullable();
            $table->string('graph_3_title_zh')->nullable();
            $table->unsignedTinyInteger('graph_3_value')->nullable();

            // 4
            $table->string('graph_4_title_az')->nullable();
            $table->string('graph_4_title_en')->nullable();
            $table->string('graph_4_title_ru')->nullable();
            $table->string('graph_4_title_es')->nullable();
            $table->string('graph_4_title_de')->nullable();
            $table->string('graph_4_title_fr')->nullable();
            $table->string('graph_4_title_zh')->nullable();
            $table->unsignedTinyInteger('graph_4_value')->nullable();

            /* =====================
               IMAGE
            ====================== */
            $table->string('image')->nullable();

            /* =====================
               STATUS
            ====================== */
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_section_twos');
    }
};
