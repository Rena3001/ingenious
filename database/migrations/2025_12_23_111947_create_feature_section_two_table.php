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
        Schema::create('feature_section_twos', function (Blueprint $table) {
           $table->id();

            // Background
            $table->string('background_image')->nullable();

            // Title & Description (multi-lang)
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_zh')->nullable();

            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_zh')->nullable();

            // ICON 1
            $table->string('icon_1')->nullable();       // flaticon-laptop-2
            $table->string('icon_1_title_az')->nullable();
            $table->string('icon_1_title_en')->nullable();
            $table->string('icon_1_title_ru')->nullable();
            $table->string('icon_1_title_de')->nullable();
            $table->string('icon_1_title_fr')->nullable();
            $table->string('icon_1_title_es')->nullable();
            $table->string('icon_1_title_zh')->nullable();

            // ICON 2
            $table->string('icon_2')->nullable();       // flaticon-big-trophy
            $table->string('icon_2_title_az')->nullable();
            $table->string('icon_2_title_en')->nullable();
            $table->string('icon_2_title_ru')->nullable();
            $table->string('icon_2_title_de')->nullable();
            $table->string('icon_2_title_fr')->nullable();
            $table->string('icon_2_title_es')->nullable();
            $table->string('icon_2_title_zh')->nullable();

            // ICON 3
            $table->string('icon_3')->nullable();       // flaticon-fast-forward-square
            $table->string('icon_3_title_az')->nullable();
            $table->string('icon_3_title_en')->nullable();
            $table->string('icon_3_title_ru')->nullable();
            $table->string('icon_3_title_de')->nullable();
            $table->string('icon_3_title_fr')->nullable();
            $table->string('icon_3_title_es')->nullable();
            $table->string('icon_3_title_zh')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_section_twos');
    }
};