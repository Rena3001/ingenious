<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('main_about_pages', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique(); // why-bamoone

            // Titles
            $table->string('title_az');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_zh')->nullable();

            // Subtitles
            $table->text('subtitle_az')->nullable();
            $table->text('subtitle_en')->nullable();
            $table->text('subtitle_ru')->nullable();
            $table->text('subtitle_de')->nullable();
            $table->text('subtitle_es')->nullable();
            $table->text('subtitle_fr')->nullable();
            $table->text('subtitle_zh')->nullable();

            // Intro / Story text
            $table->longText('intro_az')->nullable();
            $table->longText('intro_en')->nullable();
            $table->longText('intro_ru')->nullable();
            $table->longText('intro_de')->nullable();
            $table->longText('intro_es')->nullable();
            $table->longText('intro_fr')->nullable();
            $table->longText('intro_zh')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('main_about_pages');
    }
};
