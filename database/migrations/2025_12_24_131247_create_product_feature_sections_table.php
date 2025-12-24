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
        Schema::create('product_feature_sections', function (Blueprint $table) {
            $table->id();

            $table->string('background_image')->nullable();
            $table->string('image')->nullable();

            // TITLE
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_zh')->nullable();

            // FEATURE 1
            $table->string('icon_1');
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

            // FEATURE 2
            $table->string('icon_2');
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

            // FEATURE 3
            $table->string('icon_3');
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

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_feature_sections');
    }
};
