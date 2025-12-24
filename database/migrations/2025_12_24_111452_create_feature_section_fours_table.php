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
        Schema::create('feature_section_fours', function (Blueprint $table) {
            $table->id();

            // UPPER SECTION
            $table->string('upper_image')->nullable();

            foreach (['az', 'en', 'ru', 'de', 'fr', 'es', 'zh'] as $lang) {
                $table->string("upper_title_$lang")->nullable();
                $table->text("upper_description_$lang")->nullable();
            }

            // Upper icons + urls
            $table->string('upper_icon_1')->nullable();
            $table->string('upper_icon_1_url')->nullable();
            $table->string('upper_icon_2')->nullable();
            $table->string('upper_icon_2_url')->nullable();
            $table->string('upper_icon_3')->nullable();
            $table->string('upper_icon_3_url')->nullable();
            $table->string('upper_icon_4')->nullable();
            $table->string('upper_icon_4_url')->nullable();

            // LOWER SECTION
            $table->string('lower_image')->nullable();

            foreach (['az', 'en', 'ru', 'de', 'fr', 'es', 'zh'] as $lang) {
                $table->string("lower_title_$lang")->nullable();
                $table->text("lower_description_$lang")->nullable();
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
        Schema::dropIfExists('feature_section_fours');
    }
};
