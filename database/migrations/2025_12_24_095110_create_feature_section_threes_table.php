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
        Schema::create('feature_section_threes', function (Blueprint $table) {
            $table->id();

            // ========== UPPER SECTION ==========
            $table->string('upper_image')->nullable();

            $table->string('upper_title_az')->nullable();
            $table->string('upper_title_en')->nullable();
            $table->string('upper_title_ru')->nullable();
            $table->string('upper_title_de')->nullable();
            $table->string('upper_title_fr')->nullable();
            $table->string('upper_title_es')->nullable();
            $table->string('upper_title_zh')->nullable();


            $table->text('upper_description_az')->nullable();
            $table->text('upper_description_en')->nullable();
            $table->text('upper_description_ru')->nullable();
            $table->text('upper_description_de')->nullable();
            $table->text('upper_description_fr')->nullable();
            $table->text('upper_description_es')->nullable();
            $table->text('upper_description_zh')->nullable();

            // 3 ICONS (static)
            for ($i = 1; $i <= 3; $i++) {
                $table->string("upper_icon_{$i}_title_az")->nullable();
                $table->string("upper_icon_{$i}_title_en")->nullable();
                $table->string("upper_icon_{$i}_title_ru")->nullable();
                $table->string("upper_icon_{$i}_title_de")->nullable();
                $table->string("upper_icon_{$i}_title_fr")->nullable();
                $table->string("upper_icon_{$i}_title_es")->nullable();
                $table->string("upper_icon_{$i}_title_zh")->nullable();

                $table->text("upper_icon_{$i}_desc_az")->nullable();
                $table->text("upper_icon_{$i}_desc_en")->nullable();
                $table->text("upper_icon_{$i}_desc_ru")->nullable();
                $table->text("upper_icon_{$i}_desc_de")->nullable();
                $table->text("upper_icon_{$i}_desc_fr")->nullable();
                $table->text("upper_icon_{$i}_desc_es")->nullable();
                $table->text("upper_icon_{$i}_desc_zh")->nullable();
            }

            // ========== LOWER SECTION ==========
            $table->string('lower_image')->nullable();

            $table->string('lower_title_az')->nullable();
            $table->string('lower_title_en')->nullable();
            $table->string('lower_title_ru')->nullable();
            $table->string('lower_title_de')->nullable();
            $table->string('lower_title_fr')->nullable();
            $table->string('lower_title_es')->nullable();
            $table->string('lower_title_zh')->nullable();

            $table->text('lower_description_az')->nullable();
            $table->text('lower_description_en')->nullable();
            $table->text('lower_description_ru')->nullable();
            $table->text('lower_description_de')->nullable();
            $table->text('lower_description_fr')->nullable();
            $table->text('lower_description_es')->nullable();
            $table->text('lower_description_zh')->nullable();

            // 4 ICONS (static)
            for ($i = 1; $i <= 4; $i++) {
                $table->string("lower_icon_{$i}")->nullable();
                $table->string("lower_icon_{$i}_url")->nullable();
            }

            $table->string('button_url')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_section_threes');
    }
};
