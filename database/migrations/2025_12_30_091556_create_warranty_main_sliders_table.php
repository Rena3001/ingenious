<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('warranty_main_sliders', function (Blueprint $table) {
            $table->id();

            // ======================
            // IMAGES
            // ======================
            $table->string('background_image')->nullable();

            // ======================
            // TITLES (7 LANG)
            // ======================
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_zh')->nullable();

            // ======================
            // SUBTITLES (7 LANG)
            // ======================
            $table->string('subtitle_az')->nullable();
            $table->string('subtitle_en')->nullable();
            $table->string('subtitle_ru')->nullable();
            $table->string('subtitle_de')->nullable();
            $table->string('subtitle_fr')->nullable();
            $table->string('subtitle_es')->nullable();
            $table->string('subtitle_zh')->nullable();

            // ======================
            // BUTTON / ACTION
            // ======================
            $table->string('button_link')->nullable();

            // ======================
            // SETTINGS
            // ======================
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warranty_main_sliders');
    }
};
