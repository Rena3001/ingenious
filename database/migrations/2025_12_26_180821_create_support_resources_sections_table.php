<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('support_resources_sections', function (Blueprint $table) {
            $table->id();

            /* =====================
               SECTION TITLE
            ====================== */
            $table->string('section_title_az')->nullable();
            $table->string('section_title_en')->nullable();
            $table->string('section_title_ru')->nullable();
            $table->string('section_title_es')->nullable();
            $table->string('section_title_de')->nullable();
            $table->string('section_title_fr')->nullable();
            $table->string('section_title_zh')->nullable();

            /* =====================
               ROMB 1 – GUIDES
            ====================== */
            $table->string('item_1_icon')->nullable(); // play / book icon class
            $table->string('item_1_title_az')->nullable();
            $table->string('item_1_title_en')->nullable();
            $table->string('item_1_title_ru')->nullable();
            $table->string('item_1_title_es')->nullable();
            $table->string('item_1_title_de')->nullable();
            $table->string('item_1_title_fr')->nullable();
            $table->string('item_1_title_zh')->nullable();

            /* =====================
               ROMB 2 – FAQ
            ====================== */
            $table->string('item_2_icon')->nullable(); // question mark
            $table->string('item_2_title_az')->nullable();
            $table->string('item_2_title_en')->nullable();
            $table->string('item_2_title_ru')->nullable();
            $table->string('item_2_title_es')->nullable();
            $table->string('item_2_title_de')->nullable();
            $table->string('item_2_title_fr')->nullable();
            $table->string('item_2_title_zh')->nullable();

            /* =====================
               ROMB 3 – WARRANTY
            ====================== */
            $table->string('item_3_icon')->nullable(); // shield / service
            $table->string('item_3_title_az')->nullable();
            $table->string('item_3_title_en')->nullable();
            $table->string('item_3_title_ru')->nullable();
            $table->string('item_3_title_es')->nullable();
            $table->string('item_3_title_de')->nullable();
            $table->string('item_3_title_fr')->nullable();
            $table->string('item_3_title_zh')->nullable();

            /* =====================
               STATUS
            ====================== */
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('support_resources_sections');
    }
};
